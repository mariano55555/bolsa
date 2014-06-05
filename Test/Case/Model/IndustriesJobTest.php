<?php
App::uses('IndustriesJob', 'Model');

/**
 * IndustriesJob Test Case
 *
 */
class IndustriesJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.industries_job',
		'app.industry',
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
		$this->IndustriesJob = ClassRegistry::init('IndustriesJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IndustriesJob);

		parent::tearDown();
	}

}
