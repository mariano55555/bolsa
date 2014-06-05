<?php
App::uses('Experience', 'Model');

/**
 * Experience Test Case
 *
 */
class ExperienceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.experience',
		'app.job',
		'app.company',
		'app.contact',
		'app.user',
		'app.group',
		'app.access',
		'app.subscription',
		'app.tag',
		'app.jobs_user',
		'app.experiences_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Experience = ClassRegistry::init('Experience');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Experience);

		parent::tearDown();
	}

}
