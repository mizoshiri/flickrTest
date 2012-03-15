<?php
class AppController extends Controller
{
  public $components = array('DebugKit.Toolbar');

  // ログインを必須とするかどうかのフラグ
  var $needAuth = false;
  
//  public  $basicData= array(
//    "authority" => array(1=>'Admin',2=>'Editer',3=>'Sale'),
//    "display" => array(1=>'Display',2=>'Nodisplay'),
//    "open" => array(1=>'Display',2=>'Nodisplay',3=>'Only Friends'),
//    "sex" => array(1=>'Men',2=>'Woman'),
//  );
// 
//  function beforeFilter(){
////    $this->Auth->userModel = 'Sazae';
////    $this->Auth->fields = array('username' => 'email', 'password' => 'password');
////    $this->Auth->loginError = "パスワードもしくはログインIDをご確認下さい。";
////    $this->Auth->authError = "ご利用されるにはログインが必要です。";
////    $this->Auth->loginAction = array('Sazae' => false, 'controller' => 'sazaes', 'action' => 'login');
////
////    //セッションから取り出したロイン情報をセット
////    $auth = $this->Session->read('Auth');
////    $this->set('auth',$auth);
//
//    //コントローラー名の取得
//   $this->set('ctrl',$this->params['controller']);
//  }

}
?>