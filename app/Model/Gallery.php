<?php
App::uses('AppModel', 'Model');
class Gallery extends AppModel {
  
  var $name = 'Gallery';
  var $useTable = false;
  
  var $_schema = array(
    'k'=>array('type'=>'string', 'length'=>'255'),
  );
  
  var $validate = array(
    'k' => array(
        'rule' => 'notEmpty',
          'message' => 'This field cannot be left blank',
        'rule' => array('maxLength', 255),
          'message' => 'Usernames must be no larger than 255 characters long'
    ),
  );

  public function searchByKeyword($data) {
    $params = null;
    $named = Router::getParams();
    if(isset($data['Gallery']['k'])){
      $params['text'] = $data['Gallery']['k'];
    }elseif(isset($named['pass']['0']) and $named['pass']['0'] !== "home"){
      $params['text'] = $named['pass']['0'];
    }
    return $params;
  }
  
  function paginateCount($conditions, $recursive) {
    $count = count($conditions);
    return $count;
  }

  function paginate($conditions, $fields, $order, $limit, $page, $recursive) {
    $list = null;
    $count = $page * $limit - $limit;
    for($i=0; $i<$limit; $i++){
      if(isset($conditions[$count])){
        $list[$i] = $conditions[$count];
        $count++;
      }
    }
    return $list;
  }
}