<?php
App::uses('AppController', 'Controller');
/**
 * JobsUsers Controller
 *
 * @property JobsUser $JobsUser
 */
class JobsUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobsUser->recursive = 0;
		$this->set('jobsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobsUser->exists($id)) {
			throw new NotFoundException(__('Invalid jobs user'));
		}
		$options = array('conditions' => array('JobsUser.' . $this->JobsUser->primaryKey => $id));
		$this->set('jobsUser', $this->JobsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobsUser->create();
			if ($this->JobsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs user could not be saved. Please, try again.'));
			}
		}
		$users = $this->JobsUser->User->find('list');
		$jobs = $this->JobsUser->Job->find('list');
		$this->set(compact('users', 'jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobsUser->exists($id)) {
			throw new NotFoundException(__('Invalid jobs user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsUser.' . $this->JobsUser->primaryKey => $id));
			$this->request->data = $this->JobsUser->find('first', $options);
		}
		$users = $this->JobsUser->User->find('list');
		$jobs = $this->JobsUser->Job->find('list');
		$this->set(compact('users', 'jobs'));
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
		$this->JobsUser->id = $id;
		if (!$this->JobsUser->exists()) {
			throw new NotFoundException(__('Invalid jobs user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobsUser->delete()) {
			$this->Session->setFlash(__('Jobs user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Jobs user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->JobsUser->recursive = 0;
		$this->set('jobsUsers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->JobsUser->exists($id)) {
			throw new NotFoundException(__('Invalid jobs user'));
		}
		$options = array('conditions' => array('JobsUser.' . $this->JobsUser->primaryKey => $id));
		$this->set('jobsUser', $this->JobsUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->JobsUser->create();
			if ($this->JobsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs user could not be saved. Please, try again.'));
			}
		}
		$users = $this->JobsUser->User->find('list');
		$jobs = $this->JobsUser->Job->find('list');
		$this->set(compact('users', 'jobs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->JobsUser->exists($id)) {
			throw new NotFoundException(__('Invalid jobs user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsUser.' . $this->JobsUser->primaryKey => $id));
			$this->request->data = $this->JobsUser->find('first', $options);
		}
		$users = $this->JobsUser->User->find('list');
		$jobs = $this->JobsUser->Job->find('list');
		$this->set(compact('users', 'jobs'));
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
		$this->JobsUser->id = $id;
		if (!$this->JobsUser->exists()) {
			throw new NotFoundException(__('Invalid jobs user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobsUser->delete()) {
			$this->Session->setFlash(__('Jobs user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Jobs user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
