<?php
App::uses('AppController', 'Controller');

class GalleriesController extends AppController {

  public $components = array('Flickr.Flickr');
  public $helpers = array('Flickr.Flickr');

  public function index() {

    if(isset($this->data['Gallery']['k'])){
      $k = $this->data['Gallery']['k'];
      $this->set('k', $k);
    }
    
    $params = $this->Gallery->searchByKeyword($this->data);
    $photos = $this->Flickr->flickrRequest($params);
    
    $this->paginate = array(
      'page'=>1,
      'sort'=>'id',
      'limit'=>5,
      'direction'=>'desc',
    );
    $list = $this->paginate($photos['photos']['photo']);
    $this->set('list',$list);
    if(empty($list)){
        throw new NotFoundException();
    }
  }

}