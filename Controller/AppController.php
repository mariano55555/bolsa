<?php

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $helpers = array('Form', 'Html','Js', 'Time');
	public $components = array('Session',
								'Cookie',
								'RequestHandler',
								'Redirect',
								'Logs',
								'Auth' => array(
									'loginRedirect' => array('controller' => 'Users', 'action' => 'home'),
									'logoutRedirect' => array('controller' => 'Users', 'action' => 'login'),
									'authError' => "No tienes privilegios para acceder a esta sección",
									'authenticate' => array(
							            'Form' => array(
							                'fields' => array('username' => 'carnet')
							            )
							        ),
									'authorize' => array('Controller')
								)
	);

	public function isAuthorized($user)
	{
		return true;
	}

	public function beforeFilter()
	{
		$this->Auth->allow();
		$this->layout = 'default';
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'admin';
		}

		if ($this->Auth->user()) {
			$this->set('current_user', $this->Auth->user());
		}
		
	}

	public function usuarioAutenticado($field = null)
	{
	  if ($this->Auth->user()) {
			$usuarios = $this->Auth->user();
			return $usuarios[$field];
	  }
	}



}
