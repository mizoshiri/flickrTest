<?php
/* Galleries Test cases generated on: 2012-03-16 04:06:06 : 1331831166*/
App::uses('Controller', 'Controller');
App::uses('AppController', 'Controller');
App::uses('GalleriesController', 'Controller');

/**
 * TestGalleriesController *
 */
class TestGalleriesController extends PHPUnit_Framework_TestCase {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;
  public function testIndex(){

  }

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * GalleriesController Test Case
 *
 */
class GalleriesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gallery');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Galleries = new TestGalleriesController();
		$this->Galleries->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Galleries);

		parent::tearDown();
	}

}
