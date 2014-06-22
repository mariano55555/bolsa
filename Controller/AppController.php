<?php
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $helpers = array('Form', 'Html','Js', 'Time', 'GoogleMap', 'Elements');
	public $components = array('Session',
								'Cookie',
								'RequestHandler',
								'Redirect',
								'Logs',
								'Auth' => array(
									'authError'      => "No tienes privilegios para acceder a esta sección",
									'authorize'      => array('Controller'),
								)
	);

	public function isAuthorized($user)
	{
		return true;
	}

	public function beforeFilter()
	{

		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			if ($this->request->action == "admin_login") {
				$this->layout = 'login';
			}else{
				$this->layout = 'admin';	
			}
		}else{
			$this->layout = 'default';
		}


		$this->Auth->deny('*');
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
