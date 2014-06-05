<?php
App::uses('AppController', 'Controller');
/**
 * ContractsJobs Controller
 *
 * @property ContractsJob $ContractsJob
 */
class ContractsJobsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContractsJob->recursive = 0;
		$this->set('contractsJobs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContractsJob->exists($id)) {
			throw new NotFoundException(__('Invalid contracts job'));
		}
		$options = array('conditions' => array('ContractsJob.' . $this->ContractsJob->primaryKey => $id));
		$this->set('contractsJob', $this->ContractsJob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContractsJob->create();
			if ($this->ContractsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The contracts job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contracts job could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->ContractsJob->Job->find('list');
		$contracts = $this->ContractsJob->Contract->find('list');
		$this->set(compact('jobs', 'contracts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContractsJob->exists($id)) {
			throw new NotFoundException(__('Invalid contracts job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContractsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The contracts job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contracts job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContractsJob.' . $this->ContractsJob->primaryKey => $id));
			$this->request->data = $this->ContractsJob->find('first', $options);
		}
		$jobs = $this->ContractsJob->Job->find('list');
		$contracts = $this->ContractsJob->Contract->find('list');
		$this->set(compact('jobs', 'contracts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContractsJob->id = $id;
		if (!$this->ContractsJob->exists()) {
			throw new NotFoundException(__('Invalid contracts job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContractsJob->delete()) {
			$this->Session->setFlash(__('Contracts job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contracts job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContractsJob->recursive = 0;
		$this->set('contractsJobs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ContractsJob->exists($id)) {
			throw new NotFoundException(__('Invalid contracts job'));
		}
		$options = array('conditions' => array('ContractsJob.' . $this->ContractsJob->primaryKey => $id));
		$this->set('contractsJob', $this->ContractsJob->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContractsJob->create();
			if ($this->ContractsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The contracts job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contracts job could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->ContractsJob->Job->find('list');
		$contracts = $this->ContractsJob->Contract->find('list');
		$this->set(compact('jobs', 'contracts'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ContractsJob->exists($id)) {
			throw new NotFoundException(__('Invalid contracts job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContractsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The contracts job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contracts job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContractsJob.' . $this->ContractsJob->primaryKey => $id));
			$this->request->data = $this->ContractsJob->find('first', $options);
		}
		$jobs = $this->ContractsJob->Job->find('list');
		$contracts = $this->ContractsJob->Contract->find('list');
		$this->set(compact('jobs', 'contracts'));
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
		$this->ContractsJob->id = $id;
		if (!$this->ContractsJob->exists()) {
			throw new NotFoundException(__('Invalid contracts job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContractsJob->delete()) {
			$this->Session->setFlash(__('Contracts job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contracts job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
