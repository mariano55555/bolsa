<?php
App::uses('AppController', 'Controller');
/**
 * Accesses Controller
 *
 * @property Access $Access
 */
class AccessesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Access->recursive = 0;
		$this->set('accesses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Access->exists($id)) {
			throw new NotFoundException(__('Invalid access'));
		}
		$options = array('conditions' => array('Access.' . $this->Access->primaryKey => $id));
		$this->set('access', $this->Access->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Access->create();
			if ($this->Access->save($this->request->data)) {
				$this->Session->setFlash(__('The access has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The access could not be saved. Please, try again.'));
			}
		}
		$users = $this->Access->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Access->exists($id)) {
			throw new NotFoundException(__('Invalid access'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Access->save($this->request->data)) {
				$this->Session->setFlash(__('The access has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The access could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Access.' . $this->Access->primaryKey => $id));
			$this->request->data = $this->Access->find('first', $options);
		}
		$users = $this->Access->User->find('list');
		$this->set(compact('users'));
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
		$this->Access->id = $id;
		if (!$this->Access->exists()) {
			throw new NotFoundException(__('Invalid access'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Access->delete()) {
			$this->Session->setFlash(__('Access deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Access was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Access->recursive = 0;
		$this->set('accesses', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Access->exists($id)) {
			throw new NotFoundException(__('Invalid access'));
		}
		$options = array('conditions' => array('Access.' . $this->Access->primaryKey => $id));
		$this->set('access', $this->Access->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Access->create();
			if ($this->Access->save($this->request->data)) {
				$this->Session->setFlash(__('The access has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The access could not be saved. Please, try again.'));
			}
		}
		$users = $this->Access->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Access->exists($id)) {
			throw new NotFoundException(__('Invalid access'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Access->save($this->request->data)) {
				$this->Session->setFlash(__('The access has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The access could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Access.' . $this->Access->primaryKey => $id));
			$this->request->data = $this->Access->find('first', $options);
		}
		$users = $this->Access->User->find('list');
		$this->set(compact('users'));
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
		$this->Access->id = $id;
		if (!$this->Access->exists()) {
			throw new NotFoundException(__('Invalid access'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Access->delete()) {
			$this->Session->setFlash(__('Access deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Access was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
