<?php
App::uses('Industry', 'Model');

/**
 * Industry Test Case
 *
 */
class IndustryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.jobs_user',
		'app.industries_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Industry = ClassRegistry::init('Industry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Industry);

		parent::tearDown();
	}

}
