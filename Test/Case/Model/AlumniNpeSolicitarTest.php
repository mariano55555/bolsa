<?php
App::uses('AlumniNpeSolicitar', 'Model');

/**
 * AlumniNpeSolicitar Test Case
 *
 */
class AlumniNpeSolicitarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumni_npe_solicitar'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlumniNpeSolicitar = ClassRegistry::init('AlumniNpeSolicitar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlumniNpeSolicitar);

		parent::tearDown();
	}

}
