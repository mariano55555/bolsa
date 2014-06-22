<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Group $Group
 * @property Access $Access
 * @property Subscription $Subscription
 * @property Job $Job
 */
class User extends AppModel {
	public $actsAs = array('Containable');
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
			'name' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => 'Ingrese su nombre completo. Campo requerido',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
				'minlength' => array(
					'rule' => array('minlength','5'),
					'message' => 'Longitud mínima de nombre completo de 5 caracteres.',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
			),
		'phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo requerido. Ingresa un numero de teléfono',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ingrese una contraseña para la cuenta de usuario.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength','5'),
				'message' => 'Longitud mínima de contraseña de 5 caracteres.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
				)
			),
		'password_confirmation' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo requerido. Confirma la contraseña',
			),
			'Match passwords' => array(
				'rule' => 'matchPasswords',
				'message' => "Tus contraseñas no concuerdan"
			)
		),
		'carnet' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Carnet es un campo requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'longitud' => array(
				'rule' => array('longitud'),
				'message' => "El canet debe de tener una longitud de 8 digitos"
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => "Solo se admiten numeros."
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'El carnet ya se encuentra registrado.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Campo email requerido. Ingresa tu cuenta de correo electrónico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'El correo electrónico ya se encuentra registrado',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Access' => array(
			'className' => 'Access',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Subscription' => array(
			'className' => 'Subscription',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Job' => array(
			'className' => 'Job',
			'joinTable' => 'jobs_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'job_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);


	//confirmacion de contraseñas
	public function matchPasswords($data)
	{
		if ($this->data['User']['password'] == $this->data['User']['password_confirmation'])
		{
			return true;
		}
		$this->invalidate('password_confirmation', "Tus contraseñas no concuerdan");
		return false;
	}

	public function longitud($data)
	{
		if (strlen($this->data['User']['carnet']) < 8 || strlen($this->data['User']['carnet']) > 8)
		{
			$this->invalidate('carnet', "El canet debe de tener una longitud de 8 digitos");
			return false;
		}
			return true;
	}

	public function beforeSave($options = array()) {
		if (isset($this->data['User']['password'])) {
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
			#AuthComponent::password($this->data['Profesionale']['password']);
			unset($this->data['User']['passwd']);
		}
		return true;
	}


}
