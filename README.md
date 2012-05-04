# Test about Flickr API
This code for Test about Flickr API
test6
test7

## Setting
 Configure::write('Flickr.posting_url', 'http://api.flickr.com/services/rest/');
 Configure::write(
    'Flickr.defaults', array(
        'api_key' => 'Your API Key',
        'user_id' => 'Your User Id',
        'flickr_secret' => 'Secret Key',
        'method' => 'flickr.photos.search',
        'format' => 'php_serial',
        'extras' => 'description, date_taken'
    )
 );

## plugins for Cakephp

* [Flickr_CakePHP_Plugin](http://technokracy.net/2010/11/07/Flickr_CakePHP_Plugin/)
I rewrote with Cakephp2.0.6


* [debugkit](https://github.com/cakephp/debug_kit)


## Library

