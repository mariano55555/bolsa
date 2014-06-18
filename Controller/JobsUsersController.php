<?php
App::uses('AppController', 'Controller');
/**
 * JobsUsers Controller
 *
 * @property JobsUser $JobsUser
 */
class JobsUsersController extends AppController {




/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$jobsUsers = $this->JobsUser->find("all", array('order' => array('JobsUser.created DESC')));
		$this->set(compact('jobsUsers'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$jobsUser = $this->__findJobsUsers($id);
		$this->set(compact('jobsUser'));
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
		$data = $this->__findJobsUsers($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $data;
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
		$this->JobsUser->id = $id;
		$this->__findJobsUsers($this->JobsUser->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobsUser->delete()) {
			$this->Session->setFlash(__('Jobs user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Jobs user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	/*
	 * PRIVATE METHODS
	 */

	/**
	 * [__findJobsUsers description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	private function __findJobsUsers($id = NULL)
	{
		$options = array('conditions' => array('JobsUser.' . $this->JobsUser->primaryKey => $id));
		$data    = $this->JobsUser->find('first', $options);
		if (empty($data)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $data;
	}
	/**
	 * [__list description]
	 * @return [type] [description]
	 */
	private function __list()
	{
		$users = $this->JobsUser->User->find('list');
		$jobs  = $this->JobsUser->Job->find('list');
		$this->set(compact('users', 'jobs'));
	}
}
