<?php
App::uses('Gallery', 'Model');

/**
 * Gallery Test Case
 *
 */
class GalleryTestCase extends CakeTestCase {
  
  var $useTable = false;
/**
 * Fixtures
 *
 * @var array
 */
 public $fixtures = array('app.area', 'app.type');

  public function testSearchByKeyword(){

  }
  public function testValidations(){
    //setting
    $this->Gallery->create(array('k' => ''));
    $result = array_key_exists('k',$this->Gallery->invalidFileds());
    $expected = true;
    $this->assertEqual($result,$expected);
    
    //length cehck
    $this->Gallery->create(array('k' => '1234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234567678901234'));
    $result = $this->Gallery->invalidFileds();
    $expected = array("cannot write over 255 characters");
    $this->assertEqual($result['k'],$expected);
  }
/**
 * setUp method
 *
 * @return void
 */
 public function setUp() {
  parent::setUp();
  $this->Gallery = ClassRegistry::init('Gallery');
 }

/**
 * tearDown method
 *
 * @return void
 */
 public function tearDown() {
  unset($this->Gallery);
  parent::tearDown();
 }

}