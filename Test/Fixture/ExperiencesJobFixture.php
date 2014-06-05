<?php
/**
 * ExperiencesJobFixture
 *
 */
class ExperiencesJobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'job_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'experience_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_experiences_jobs_jobs' => array('column' => 'job_id', 'unique' => 0),
			'FK_experiences_jobs_experiences' => array('column' => 'experience_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'job_id' => 1,
			'experience_id' => 1,
			'active' => 1,
			'created' => '2014-06-05 22:06:05',
			'modified' => '2014-06-05 22:06:05',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
