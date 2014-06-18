<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 */
class JobsController extends AppController {

	public $components = array('Paginator');
	public $uses       = array('Job', 'Country', 'Contract', 'Experience');
    public $paginate   = array(
        'limit' => 1,
        'conditions' => array(
        	'Job.active' => 1
        	),
        'order' => array(
            'Job.created' => 'desc'
        )
    );



public function test()
{
	$this->layout ="test";
}



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
		$jobs = $this->Paginator->paginate('Job');


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
	    //POR CIUDAD
	    for ($i=0; $i < count($data) ; $i++) { 
	    	if (isset($data[$i]['City']['id'])) {
	    		if (in_array($data[$i]['City']['name'], $ciudadesid)) {
	    		}else{
	    			$ciudadesid[$data[$i]['City']['id']] = $data[$i]['City']['name'];
	    		}
	    	 } 
	    }
	    //POR INDUSTRIA
	    $industriasid = array();
	    for ($i=0; $i < count($data) ; $i++) { 
	    	for ($j=0; $j < count($data[$i]['Industry']) ; $j++) { 
	    		if (in_array($data[$i]['Industry'][$j]['name'], $industriasid)) {
	    		}else{
	    			$industriasid[$data[$i]['Industry'][$j]['id']] = $data[$i]['Industry'][$j]['name'];	
	    		}
	    	}
	    }
	    //POR AREA
	    $areasid = array();
	    for ($i=0; $i < count($data) ; $i++) { 
	    	for ($j=0; $j < count($data[$i]['Area']) ; $j++) { 
	    		if (in_array($data[$i]['Area'][$j]['name'], $areasid)) {
	    		}else{
	    			$areasid[$data[$i]['Area'][$j]['id']] = $data[$i]['Area'][$j]['name'];	
	    		}
	    	}
	    }

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

	    $industrias = array();
	    for ($i=0; $i < count($data) ; $i++) { 
	    	for ($j=0; $j < count($data[$i]['Industry']) ; $j++) { 
	    			 if (isset($data[$i]['Industry'][$j]['id'])) {
				    	$contador = 0;
				    	foreach ($industriasid as $key => $value) {
				    		if ($key == $data[$i]['Industry'][$j]['id']) {
								$industrias[$i]['id']       = $key;
								$industrias[$i]['nombre']   = $data[$i]['Industry'][$j]['name'];
								$contador ++;
				    		}
				    	}
				    	//aca poner que ondas
				    	$industrias[$i]['cantidad'] = $contador;
			    	}
	    	}
	    }
	    $areas = array();
	    for ($i=0; $i < count($data) ; $i++) { 
	    	for ($j=0; $j < count($data[$i]['Area']) ; $j++) { 
	    			 if (isset($data[$i]['Area'][$j]['id'])) {
				    	$contador = 0;
				    	foreach ($areasid as $key => $value) {
				    		if ($key == $data[$i]['Area'][$j]['id']) {
								$areas[$i]['id']       = $key;
								$areas[$i]['nombre']   = $data[$i]['Area'][$j]['name'];
								$contador ++;
				    		}
				    	}
				    	//aca poner que ondas
				    	$areas[$i]['cantidad'] = $contador;
			    	}
	    	}
	    }

	    //TIPO DE CONTRACTO
	    $contratos = $this->Contract->find("list", array('conditions' => array('Contract.active' => 1)));
	    //TIPO DE EXPERIENCIA
	    $experiencias = $this->Experience->find("list", array('conditions' => array('Experience.active' => 1)));
		//debug($areas);
		$totaltrabajos = count($data);
		$this->set(compact('ciudades', 'industrias','totaltrabajos', 'contratos', 'experiencias', 'areas'));

	}



	public function search($seccion = NULL, $id = NULL)
	{

		$jobs1 = $this->Job->find("all", array('contain' => 'City', 'conditions' => array('Job.active' => 1)));
		$jobs2 = $this->Job->find("all", array('contain' => 'Industry', 'conditions' => array('Job.active' => 1)));
		debug($jobs2);
		switch ($seccion) {
			case 'ciudad':
				foreach ($jobs1 as $job) {
					if ($job['City']['id'] == $id) {
						$jobs[]	 = $job;
					}
				}
				$this->set(compact('jobs'));
				break;
			case 'industria':
				foreach ($jobs2 as $job) {
					for ($i=0; $i < count($jobs2) ; $i++) { 
						# code...
					}
				}
				break;
			case 'area':
				
				break;
			
			default:
				# code...
				break;
		}


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

	public function contactanos()
	{

		

	}



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
