<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
public $components = array('CustomSession');



public function beforeFilter(){
	parent::beforeFilter();
	$this->Auth->allow('registro', 'login', 'validate_pass', 'validar_registro');
}



public function login()
{
	$this->layout = "login";
	if ($this->request->is('post')) {
		$this->loadModel('AlumniNpeSolicitar');
		debug($this->request->data);
		$carnetvalidado  = $this->AlumniNpeSolicitar->field('AlumniNpeSolicitar.estado_npe', 
															array(
																'AlumniNpeSolicitar.carnet'     => $this->request->data['User']['carnet'],
																'AlumniNpeSolicitar.estado_npe' => 1
															));
		$password        = AuthComponent::password($this->request->data['User']['password']);
		$validacion      = $this->User->find('all', array(
									    'conditions' => array(
														'User.carnet'   => $this->request->data['User']['carnet'],
														'User.password' => $password,
									    ), //array of conditions
									    'contain' => array('Group')
									));

		if (!empty($validacion)) {
			if (!empty($carnetvalidado)) {
				// CREAR LAS VARIABLES DE AUTENTICACION
				$nombre  = $this->AlumniNpeSolicitar->field('AlumniNpeSolicitar.nombre', 
															array(
																'AlumniNpeSolicitar.carnet'     => $this->request->data['User']['carnet'],
																'AlumniNpeSolicitar.estado_npe' => 1
															));
				$email   = $this->AlumniNpeSolicitar->field('AlumniNpeSolicitar.email', 
															array(
																'AlumniNpeSolicitar.carnet'     => $this->request->data['User']['carnet'],
																'AlumniNpeSolicitar.estado_npe' => 1
															));
				$id      = $this->User->field('User.id', array('User.carnet' => $this->request->data['User']['carnet'], 'User.active' => 1));
				$groupid = $this->User->field('User.group_id', array('User.carnet' => $this->request->data['User']['carnet'], 'User.active' => 1));
				$phone   = $this->User->field('User.phone', array('User.carnet' => $this->request->data['User']['carnet'], 'User.active' => 1));

				$this->CustomSession->sessionstorage('Auth.User.id', $id);
				$this->CustomSession->sessionstorage('Auth.User.name', $nombre);
				$this->CustomSession->sessionstorage('Auth.User.group_id', $groupid);
				$this->CustomSession->sessionstorage('Auth.User.email', $email);
				$this->CustomSession->sessionstorage('Auth.User.phone', $phone);
				$this->CustomSession->sessionstorage('Auth.User.carnet', $this->request->data['User']['carnet']);

				// Actualizar el nombre y correo la primera vez que se loguea.
				$nombretabla = $this->User->field('User.name', array('User.id' => $id));
				if (!isset($nombretabla)) {
					$this->User->id = $id;
						$data = array('email' => $email, 'name' => $nombre);
					$this->User->save($data);	
				}
				
				//$this->redirect(array('action' => 'dashboard', 'admin' => true));

				$this->redirect('/Inicio');	
			}else{
				$this->Session->setFlash("Tu carnet no ha sido validado en el sistema Alumni.");
				$this->redirect('/');	
			}
		}else{
			$this->Session->setFlash("Credenciales incorrectas. Intenta nuevamente");
			$this->redirect('/');
		}
	}

}

/**
 * [logout description]
 * @return [type] [description]
 */
public function logout()
{
	return $this->redirect($this->Auth->logout());
}

/**
 * [registro description]
 * @return [type] [description]
 */

	public function registro() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->loadModel('AlumniNpeSolicitar');
			$carnetvalidado  = $this->AlumniNpeSolicitar->field('AlumniNpeSolicitar.estado_npe', 
																	array(
																		'AlumniNpeSolicitar.carnet'     => $this->request->data['User']['carnet'],
																		'AlumniNpeSolicitar.estado_npe' => 1
																	));
			if ($carnetvalidado != FALSE ) {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->__correroregistro('mariano paz', 'mariano.paz.flores@gmail.com', 'mariano', 'mariano', 'abcsdasdasdfa');
					$this->Session->setFlash("Tu cuenta ha sido registrada.");
					$this->redirect('/');
				} else {
					$this->Session->setFlash("La Información solicitada no ha sido guardada. Corrige los mensajes de error");
					$this->redirect('/');
				}
			}else{
				$this->Session->setFlash("Debes solicitar tu carnet por medio del sistema Alumni");
				$this->redirect('/');
			}
		}
		$this->__list();
	}
/**
 * [admin_dashboard description]
 * @return [type] [description]
 */
public function admin_dashboard()
{
	# code...
}



/**
 * [home description]
 * @return [type] [description]
 */
public function home()
{
	$this->loadModel("Job");
	$this->loadModel("Country");
	$latest = $this->Job->find("all", array(
						'conditions' => array('Job.active' => 1), //array of conditions
						'order'      => array('Job.created DESC'),
						'contain'    => array('City'),
						'limit'      => 5 //int
					));
	$all = $this->Job->find("all", array(
						'conditions' => array('Job.active' => 1), //array of conditions
						'order'      => array('Job.created DESC'),
						'contain'    => array('City')
					));
	for ($i=0; $i < count($latest) ; $i++) { 
		$latest[$i]['City']['country'] =  $this->Country->field('name', array('Country.id' => $latest[$i]['City']['country_id']));
	}

	for ($i=0; $i < count($all) ; $i++) { 
		$all[$i]['City']['country'] =  $this->Country->field('name', array('Country.id' => $all[$i]['City']['country_id']));
	}

	//ECONTRAR LA CANTIDAD DE EMPLEOS POR PAIS
	$paisesid = array();
	for ($i=0; $i < count($all) ; $i++) { 
		if (in_array($all[$i]['City']['country_id'] , $paisesid)) {
		}else{
			$paisesid[$all[$i]['City']['country_id']] = $all[$i]['City']['country'];
		}
	}



	$a = 0;
	foreach ($paisesid as $key => $value) {
			$contador             = 0;
			$paises[$a]['id']     = $key;
			$paises[$a]['nombre'] = $value;
			for ($i=0; $i < count($all) ; $i++) {
				if ($key == $all[$i]['City']['country_id']) {
						$contador ++;
		    		}
			}
			$paises[$a]['cantidad'] = $contador;
			$a++;
	}
	$parte =  array_chunk($paises, ceil(count($paises) / 2));
	$this->set(compact('latest', 'all', 'paises', 'parte'));
}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$users = $this->User->find("all", array('order' => array('User.created DESC')));
		$this->set(compact('users'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$user = $this->__findUser($id);
		$this->set(compact('user'));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash("La Información ha sido guardada", "flash_info");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("La Información solicitada no ha sido guardada. Favor intente nuevamente", "flash_error");
			}
		}
		$this->__list();
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$user = $this->__findUser($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash("La Información ha sido guardada", "flash_info");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("La Información solicitada no ha sido guardada. Favor intente nuevamente", "flash_error");
			}
		} else {
			
			$this->request->data = $user;
		}
		$this->__list();
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		$this->__findUser($this->User->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash("La Información ha sido eliminada", "flash_info");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash("La Información solicitada no ha sido eliminada. Favor intente nuevamente", "flash_error");
		$this->redirect(array('action' => 'index'));
	}


	/**
	 * PRIVATE METHOD
	 */
	
	private function __list()
	{
		$groups = $this->User->Group->find('list');
		$jobs   = $this->User->Job->find('list');
		$this->set(compact('groups', 'jobs'));
	}


	private function __findUser($id = NULL)
	{
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$user    = $this->User->find('first', $options);
		if (empty($user)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $user;		
	}

	/**
	 * Custom methods
	 */
	

	public function validar_registro()
	{
		if($this->request->is('ajax'))
		{
			$this->request->data['User'][$this->request->data['field']] = $this->request->data['value'];
			$this->User->set($this->data);
			if ($this->User->validates()) {
				$this->autoRender = FALSE;
			}else{
				//$this->layout = "ajaxtable";
				$error = $this->validateErrors($this->User);
				$this->set('error', $error[$this->request->data['field']]);
			}
		}
	}
	public function validate_pass()
	{
		if($this->request->is('ajax'))
		{
			$this->layout = "ajax";
			$this->request->data['User']['password_confirmation'] = $this->request->data['password_confirmation'];
			$this->request->data['User']['password']              = $this->request->data['password'];
			$this->User->set($this->data);
			if ($this->User->validates()) {
				$this->autoRender = FALSE;
			}else{
				$error = $this->validateErrors($this->User);
				$this->set('error', $error['password_confirmation']);
			}
		}
	}


	/**
	 *  FUNCIONES DE CORREO ELECTRONICO
	 */
	

	/**
	 * [__correroregistro description]
	 * @param  [type] $nombre   [description]
	 * @param  [type] $email    [description]
	 * @param  [type] $username [description]
	 * @param  [type] $password [description]
	 * @param  [type] $codigo   [description]
	 * @return [type]           [description]
	 */
	public function __correroregistro($nombre = NULL, $email = NULL, $username = NULL, $password = NULL, $codigo = NULL)
	{
				$Email = new CakeEmail('smtp');
				$Email->template('nuevacuenta', 'layout')
					  ->emailFormat('html')
					  ->viewVars(array('usuario' => $username, 'password' => $password, 'nombres' => $nombre, 'codigo' => $codigo))
					  ->from(array('admision@esen.edu.sv' => 'ESEN'))
		    		  ->to(array($email))
		    		  ->subject('Aplicación en línea')
		    		  ->attachments(array(
						    'logo.png' => array(
						        'file' => 'img/esen_header.png',
						        'mimetype' => 'image/png',
						        'contentId' => 'milogo'
						    )
						))
		              ->send();	
	}




}
