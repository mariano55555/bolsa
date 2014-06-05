<?php
App::uses('Area', 'Model');

/**
 * Area Test Case
 *
 */
class AreaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.area',
		'app.job',
		'app.company',
		'app.contact',
		'app.city',
		'app.country',
		'app.contract',
		'app.contracts_job',
		'app.experience',
		'app.experiences_job',
		'app.user',
		'app.group',
		'app.access',
		'app.subscription',
		'app.tag',
		'app.jobs_user',
		'app.areas_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Area = ClassRegistry::init('Area');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Area);

		parent::tearDown();
	}

}
