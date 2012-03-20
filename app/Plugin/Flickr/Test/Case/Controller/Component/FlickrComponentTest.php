<?php
App::uses('ComponentCollection', 'Controller');
App::uses('Flickr', 'Controller/Component');
App::uses('Component', 'Flickr');

class TestFlickrComponent extends FlickrComponent {
 public $evalTest = false;
 public $evalCode = '';

 public function loadPanels($panels, $settings = array()) {
  $this->_loadPanels($panels, $settings);
 }

 protected function _eval($code) {
  if ($this->evalTest) {
   $this->evalCode = $code;
   return;
  }
  eval($code);
 }
}


/**
* DebugKitToolbarComponentTestCase Test case
*/
class FlickrComponentTestCase extends CakeTestCase {

/**
 * fixtures.
 *
 * @var array
 **/
 public $fixtures = array('core.article');

/**
 * url for test
 *
 * @var string
 **/
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
