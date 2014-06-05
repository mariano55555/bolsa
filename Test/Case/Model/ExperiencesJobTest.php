<?php
App::uses('ExperiencesJob', 'Model');

/**
 * ExperiencesJob Test Case
 *
 */
class ExperiencesJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.experiences_job',
		'app.job',
		'app.company',
		'app.contact',
		'app.user',
		'app.group',
		'app.access',
		'app.subscription',
		'app.tag',
		'app.jobs_user',
		'app.experience'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExperiencesJob = ClassRegistry::init('ExperiencesJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExperiencesJob);

		parent::tearDown();
	}

}
