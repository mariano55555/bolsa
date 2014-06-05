<?php
App::uses('AppController', 'Controller');
/**
 * Contracts Controller
 *
 * @property Contract $Contract
 */
class ContractsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contract->recursive = 0;
		$this->set('contracts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contract->exists($id)) {
			throw new NotFoundException(__('Invalid contract'));
		}
		$options = array('conditions' => array('Contract.' . $this->Contract->primaryKey => $id));
		$this->set('contract', $this->Contract->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contract->create();
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Contract->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contract->exists($id)) {
			throw new NotFoundException(__('Invalid contract'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contract.' . $this->Contract->primaryKey => $id));
			$this->request->data = $this->Contract->find('first', $options);
		}
		$jobs = $this->Contract->Job->find('list');
		$this->set(compact('jobs'));
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
		$this->Contract->id = $id;
		if (!$this->Contract->exists()) {
			throw new NotFoundException(__('Invalid contract'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contract->delete()) {
			$this->Session->setFlash(__('Contract deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contract was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contract->recursive = 0;
		$this->set('contracts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contract->exists($id)) {
			throw new NotFoundException(__('Invalid contract'));
		}
		$options = array('conditions' => array('Contract.' . $this->Contract->primaryKey => $id));
		$this->set('contract', $this->Contract->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Contract->create();
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Contract->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Contract->exists($id)) {
			throw new NotFoundException(__('Invalid contract'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contract.' . $this->Contract->primaryKey => $id));
			$this->request->data = $this->Contract->find('first', $options);
		}
		$jobs = $this->Contract->Job->find('list');
		$this->set(compact('jobs'));
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
		$this->Contract->id = $id;
		if (!$this->Contract->exists()) {
			throw new NotFoundException(__('Invalid contract'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contract->delete()) {
			$this->Session->setFlash(__('Contract deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contract was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
