<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 */
class JobsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Job->recursive = 0;
		$this->set('jobs', $this->paginate());
		$this->__list();
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
				$this->Session->setFlash(__('The job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
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
			$this->Session->setFlash(__('Job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job was not deleted'));
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
