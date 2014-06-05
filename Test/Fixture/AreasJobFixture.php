<?php
/**
 * AreasJobFixture
 *
 */
class AreasJobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'job_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_areas_jobs_areas' => array('column' => 'area_id', 'unique' => 0),
			'FK_areas_jobs_jobs' => array('column' => 'job_id', 'unique' => 0)
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
			'created' => '2014-06-05 23:05:39',
			'modified' => '2014-06-05 23:05:39',
			'created_by' => 1,
			'modified_by' => 1,
			'active' => 1,
			'area_id' => 1,
			'job_id' => 1
		),
	);

}
