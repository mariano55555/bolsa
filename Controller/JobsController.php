<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 */
class JobsController extends AppController {

	public $components = array('Paginator');
	public $uses       = array('Job', 'Country');
    public $paginate   = array(
        'limit' => 1,
        'conditions' => array(
        	'Job.active' => 1
        	),
        'order' => array(
            'Job.created' => 'desc'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Ofetas de empleo');
		//$this->Job->recursive = 0;
		$this->Paginator->settings = $this->paginate;
	    // similar to findAll(), but fetches paged results
		$jobs       = $this->Paginator->paginate('Job');
	    for ($i=0; $i < count($jobs) ; $i++) { 
	    	$jobs[$i]['Country']['name'] =  $this->Country->field("name", array('Country.id' => $jobs[$i]['City']['country_id'] ));
	    	if (isset($jobs[$i]['City']['id'])) {
	    	 	$ciudadesid[][$jobs[$i]['City']['id']] = $jobs[$i]['City']['name'];
	    	 } 
	    }
	    $this->set('jobs', $jobs);

	    //CALCULOS DE BUSQUEDAS
	    $data = $this->Job->find("all", array('conditions' => array('Job.active' => 1)));
	    $ciudadesid = array();
	    for ($i=0; $i < count($data) ; $i++) { 
	    	if (isset($data[$i]['City']['id'])) {
	    		if (in_array($data[$i]['City']['name'], $ciudadesid)) {
	    		}else{
	    			$ciudadesid[$data[$i]['City']['id']] = $data[$i]['City']['name'];
	    		}
	    	 } 
	    }
	    //debug($ciudadesid);
	    $ciudades = array();
	    for ($i=0; $i < count($data) ; $i++) { 
	    	if (isset($data[$i]['City']['id'])) {
		    	$contador = 0;
		    	foreach ($ciudadesid as $key => $value) {
		    		if ($key == $data[$i]['City']['id']) {
						$ciudades[$i]['id']       = $key;
						$ciudades[$i]['nombre']   = $data[$i]['City']['name'];
						$contador ++;
		    		}
		    	}
		    	//aca poner que ondas
		    	$ciudades[$i]['cantidad'] = $contador;
	    	}
	    }
		//debug($ciudades);
		$totaltrabajos = count($data);
		$this->set(compact('ciudades', 'totaltrabajos'));

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$job = $this->__findJob($id);
		$this->set(compact('job'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash("La Información ha sido guardada", "flash_info");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("La Información solicitada no ha sido guardada Favor intente nuevamente", "flash_error");
			}
		}
		$this->__list();
	}




/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$jobs = $this->Job->find("all", array('order' => array('Job.created DESC')));
		$this->set(compact('jobs'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$job = $this->__findJob($id);
		$this->set(compact('job'));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
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
		$job = $this->__findJob($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash("La Información ha sido guardada", "flash_info");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("La Información solicitada no ha sido guardada. Favor intente nuevamente", "flash_error");
			}
		} else {
			$this->request->data = $job;
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
		$this->Job->id = $id;
		$this->__findJob($this->Job->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash("La Información ha sido eliminada", "flash_info");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash("La Información solicitada no ha sido eliminada. Favor intente nuevamente", "flash_error");
		$this->redirect(array('action' => 'index'));
	}



	//CUSTOM




	//PRIVATE
	
	/**
	 * [__list description]
	 * @return [type] [description]
	 */
	
	private function __list()
	{
		$companies   = $this->Job->Company->find('list');
		$cities      = $this->Job->City->find('list');
		$areas       = $this->Job->Area->find('list');
		$contracts   = $this->Job->Contract->find('list');
		$experiences = $this->Job->Experience->find('list');
		$industries  = $this->Job->Industry->find('list');
		$users       = $this->Job->User->find('list');
		$this->set(compact('companies', 'cities', 'areas', 'contracts', 'experiences', 'industries', 'users'));
	}

	/**
	 * [__findJob description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	private function __findJob($id = NULL)
	{
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$job     = $this->Job->find('first', $options);
		if (empty($job)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $job;	
	}


}
