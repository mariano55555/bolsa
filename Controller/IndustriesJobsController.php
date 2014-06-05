<?php
App::uses('AppController', 'Controller');
/**
 * IndustriesJobs Controller
 *
 * @property IndustriesJob $IndustriesJob
 */
class IndustriesJobsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->IndustriesJob->recursive = 0;
		$this->set('industriesJobs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IndustriesJob->exists($id)) {
			throw new NotFoundException(__('Invalid industries job'));
		}
		$options = array('conditions' => array('IndustriesJob.' . $this->IndustriesJob->primaryKey => $id));
		$this->set('industriesJob', $this->IndustriesJob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IndustriesJob->create();
			if ($this->IndustriesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The industries job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industries job could not be saved. Please, try again.'));
			}
		}
		$industries = $this->IndustriesJob->Industry->find('list');
		$jobs = $this->IndustriesJob->Job->find('list');
		$this->set(compact('industries', 'jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->IndustriesJob->exists($id)) {
			throw new NotFoundException(__('Invalid industries job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndustriesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The industries job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industries job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IndustriesJob.' . $this->IndustriesJob->primaryKey => $id));
			$this->request->data = $this->IndustriesJob->find('first', $options);
		}
		$industries = $this->IndustriesJob->Industry->find('list');
		$jobs = $this->IndustriesJob->Job->find('list');
		$this->set(compact('industries', 'jobs'));
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
		$this->IndustriesJob->id = $id;
		if (!$this->IndustriesJob->exists()) {
			throw new NotFoundException(__('Invalid industries job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IndustriesJob->delete()) {
			$this->Session->setFlash(__('Industries job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industries job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->IndustriesJob->recursive = 0;
		$this->set('industriesJobs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->IndustriesJob->exists($id)) {
			throw new NotFoundException(__('Invalid industries job'));
		}
		$options = array('conditions' => array('IndustriesJob.' . $this->IndustriesJob->primaryKey => $id));
		$this->set('industriesJob', $this->IndustriesJob->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->IndustriesJob->create();
			if ($this->IndustriesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The industries job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industries job could not be saved. Please, try again.'));
			}
		}
		$industries = $this->IndustriesJob->Industry->find('list');
		$jobs = $this->IndustriesJob->Job->find('list');
		$this->set(compact('industries', 'jobs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->IndustriesJob->exists($id)) {
			throw new NotFoundException(__('Invalid industries job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndustriesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The industries job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industries job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IndustriesJob.' . $this->IndustriesJob->primaryKey => $id));
			$this->request->data = $this->IndustriesJob->find('first', $options);
		}
		$industries = $this->IndustriesJob->Industry->find('list');
		$jobs = $this->IndustriesJob->Job->find('list');
		$this->set(compact('industries', 'jobs'));
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
		$this->IndustriesJob->id = $id;
		if (!$this->IndustriesJob->exists()) {
			throw new NotFoundException(__('Invalid industries job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IndustriesJob->delete()) {
			$this->Session->setFlash(__('Industries job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industries job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
