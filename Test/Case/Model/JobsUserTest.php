<?php
App::uses('JobsUser', 'Model');

/**
 * JobsUser Test Case
 *
 */
class JobsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobs_user',
		'app.user',
		'app.job',
		'app.company',
		'app.contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobsUser = ClassRegistry::init('JobsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobsUser);

		parent::tearDown();
	}

}
