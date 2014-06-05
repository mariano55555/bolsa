<?php
App::uses('AppController', 'Controller');
/**
 * ExperiencesJobs Controller
 *
 * @property ExperiencesJob $ExperiencesJob
 */
class ExperiencesJobsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExperiencesJob->recursive = 0;
		$this->set('experiencesJobs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExperiencesJob->exists($id)) {
			throw new NotFoundException(__('Invalid experiences job'));
		}
		$options = array('conditions' => array('ExperiencesJob.' . $this->ExperiencesJob->primaryKey => $id));
		$this->set('experiencesJob', $this->ExperiencesJob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExperiencesJob->create();
			if ($this->ExperiencesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The experiences job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experiences job could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->ExperiencesJob->Job->find('list');
		$experiences = $this->ExperiencesJob->Experience->find('list');
		$this->set(compact('jobs', 'experiences'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExperiencesJob->exists($id)) {
			throw new NotFoundException(__('Invalid experiences job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExperiencesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The experiences job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experiences job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExperiencesJob.' . $this->ExperiencesJob->primaryKey => $id));
			$this->request->data = $this->ExperiencesJob->find('first', $options);
		}
		$jobs = $this->ExperiencesJob->Job->find('list');
		$experiences = $this->ExperiencesJob->Experience->find('list');
		$this->set(compact('jobs', 'experiences'));
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
		$this->ExperiencesJob->id = $id;
		if (!$this->ExperiencesJob->exists()) {
			throw new NotFoundException(__('Invalid experiences job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExperiencesJob->delete()) {
			$this->Session->setFlash(__('Experiences job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Experiences job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ExperiencesJob->recursive = 0;
		$this->set('experiencesJobs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ExperiencesJob->exists($id)) {
			throw new NotFoundException(__('Invalid experiences job'));
		}
		$options = array('conditions' => array('ExperiencesJob.' . $this->ExperiencesJob->primaryKey => $id));
		$this->set('experiencesJob', $this->ExperiencesJob->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ExperiencesJob->create();
			if ($this->ExperiencesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The experiences job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experiences job could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->ExperiencesJob->Job->find('list');
		$experiences = $this->ExperiencesJob->Experience->find('list');
		$this->set(compact('jobs', 'experiences'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ExperiencesJob->exists($id)) {
			throw new NotFoundException(__('Invalid experiences job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExperiencesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The experiences job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experiences job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExperiencesJob.' . $this->ExperiencesJob->primaryKey => $id));
			$this->request->data = $this->ExperiencesJob->find('first', $options);
		}
		$jobs = $this->ExperiencesJob->Job->find('list');
		$experiences = $this->ExperiencesJob->Experience->find('list');
		$this->set(compact('jobs', 'experiences'));
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
		$this->ExperiencesJob->id = $id;
		if (!$this->ExperiencesJob->exists()) {
			throw new NotFoundException(__('Invalid experiences job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExperiencesJob->delete()) {
			$this->Session->setFlash(__('Experiences job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Experiences job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
