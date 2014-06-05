<?php
/**
 * IndustriesJobFixture
 *
 */
class IndustriesJobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'industry_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'job_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_industries_jobs_industries1_idx' => array('column' => 'industry_id', 'unique' => 0),
			'fk_industries_jobs_jobs1_idx' => array('column' => 'job_id', 'unique' => 0)
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
			'industry_id' => 1,
			'job_id' => 1,
			'active' => 1,
			'created' => '2014-06-05 23:07:44',
			'modified' => '2014-06-05 23:07:44',
			'created_by' => 1,
			'modified_by' => '2014-06-05 23:07:44'
		),
	);

}
