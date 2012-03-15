<?php
App::uses('AppController', 'Controller');
/**
 * Galleries Controller
 *
 */
class GalleriesController extends AppController {

  
  public $components = array('Flickr.Flickr');
  public $helpers = array('Flickr.Flickr');

  
  public function index() {
    
    if(isset($this->data['Key']['k'])){
      $this->redirect(array('action' => '/index/k:'.$this->data['Key']['k']));
    }
    $params = $this->Flickr->flickrParams($this->params['named']);
    $photos = $this->Flickr->flickrRequest($params);    
    $this->set('photos', $photos);
    $this->set('named', $this->params['named']);
  }

}
