<?php
App::uses('Component', 'Controller');
class FlickrComponent extends Component {

/**
 * POST a request to the Flickr API
 *
 * @param array $params required The parameters to POST to Flickr per API
 * @param array $options optional Additional http headers/options
 * @return array Response from Flickr or string Error message
 * @access public
 */
 public function flickrRequest($postData, $options = array()) {
  // set the posting url, or use the hard-coded default
  $postUrl = Configure::read('Flickr.posting_url');
  if (!$postUrl) {
   $postUrl = 'http://api.flickr.com/services/rest/';
  }

  // check for some default values (set in bootstrap or core), combine with data
  $postData = Set::merge(Configure::read('Flickr.defaults'), $postData);

  // defaults if not set:
  if (!isset($postData['format'])) {
   $postData['format'] = 'php_serial';
  }
  if (!isset($postData['method'])) {
   $postData['method'] = 'flickr.photos.search';
  }

  // make the request
  try {
   $response = $this->__doPost($postUrl, $postData, $options);

   // problem connecting or with the posting_url
   if ($response === false) {
    throw new Exception("No response from $postUrl");
   }

   // check for a usable response if format is php_serial and not json
   if ($postData['format'] == 'php_serial') {
    // response received, make it an array or unserialize returns false
    $response = @unserialize($response);

    // a response was received, but could not be unserialized (ie: empty)
    if ($response === false) {
     throw new Exception('The response was not usable.');
    }

    // check to see if Flickr returned an error
    if ($response['stat'] == 'fail') {
     throw new Exception(
      'Flickr error code '.$response['code'].': '.$response['message']
     );
    }
   }

   // simple check for stat:ok in the Flickr json response
   if ($postData['format'] == 'json') {
    if (strpos($response, '"stat":"ok"') === false) {
     throw new Exception('Flickr returned an error.');
    }
   }

  } catch (Exception $e) {
   return $e->getMessage();
  }
  // valid response
  return $response;
 }

/**
 * Do the actual POSTing
 *
 * @param string $postUrl required The url to POST to
 * @param array $postData required The data to be POSTed
 * @param array $options required Additional http headers/options
 * @return string Response or false if connection fails
 * @access private
 */
 private function __doPost($postUrl, $postData, $options) {
  // prepare the post data
  $postData = http_build_query($postData);
    //var_dump($postData);
  // set the http options
  $postDefaults = array(
   'method'  => 'POST',
   'header'  => 'Content-type: application/x-www-form-urlencoded',
   'content' => $postData
  );
  // combine any other options with the defaults
  $postOptions['http'] = $options + $postDefaults;

  // post the request
  $context = stream_context_create($postOptions);
  $response = @file_get_contents($postUrl, false, $context);

  // problem connecting or bad url
  if ($response === false) {
   return false;
  }
  // got something
  return $response;
 }
  
 public function flickrParams($named=array()) {
    $params['per_page'] = 5;
    if(isset($named['k'])){
      $params['text'] = $named['k'];
    }
    if(isset($named['page'])){
      $params['page'] = $named['page'];
    }
    return $params;
  }

}