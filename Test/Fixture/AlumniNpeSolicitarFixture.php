<?php
/**
 * AlumniNpeSolicitarFixture
 *
 */
class AlumniNpeSolicitarFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'alumni_npe_solicitar';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'carnet' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'dir_envio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'fecha_solicitud' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_vencimi' => array('type' => 'date', 'null' => false, 'default' => null),
		'npe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 41, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'estado_npe' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_pago_npe' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'url_img' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'est_estrega' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'carnet' => 'Lorem ',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'dir_envio' => 'Lorem ipsum dolor sit amet',
			'fecha_solicitud' => '2014-06-20',
			'fecha_vencimi' => '2014-06-20',
			'npe' => 'Lorem ipsum dolor sit amet',
			'estado_npe' => 1,
			'fecha_pago_npe' => '2014-06-20 05:58:24',
			'url_img' => 'Lorem ipsum dolor sit amet',
			'est_estrega' => 1
		),
	);

}
