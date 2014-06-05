<?php
App::uses('AreasJob', 'Model');

/**
 * AreasJob Test Case
 *
 */
class AreasJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.areas_job',
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
		'app.jobs_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AreasJob = ClassRegistry::init('AreasJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AreasJob);

		parent::tearDown();
	}

}
