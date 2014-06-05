<?php
App::uses('Contract', 'Model');

/**
 * Contract Test Case
 *
 */
class ContractTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contract',
		'app.job',
		'app.company',
		'app.contact',
		'app.user',
		'app.group',
		'app.access',
		'app.subscription',
		'app.tag',
		'app.jobs_user',
		'app.contracts_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contract = ClassRegistry::init('Contract');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contract);

		parent::tearDown();
	}

}
