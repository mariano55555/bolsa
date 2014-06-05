<?php
App::uses('ContractsJob', 'Model');

/**
 * ContractsJob Test Case
 *
 */
class ContractsJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contracts_job',
		'app.job',
		'app.company',
		'app.contact',
		'app.user',
		'app.group',
		'app.access',
		'app.subscription',
		'app.tag',
		'app.jobs_user',
		'app.contract'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContractsJob = ClassRegistry::init('ContractsJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContractsJob);

		parent::tearDown();
	}

}
