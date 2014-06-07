<?php
App::uses('AppController', 'Controller');
/**
 * ExperiencesJobs Controller
 *
 * @property ExperiencesJob $ExperiencesJob
 */
class ExperiencesJobsController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$experiencesJobs = $this->ExperiencesJob->find("all", array('order' => array('ExperiencesJob.created DESC')));
		$this->set(compact('experiencesJobs'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$experiencesJob = $this->__findExperiencesJob($id);
		$this->set(compact('experiencesJob'));
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
		$experiencesJobs = $this->__findExperiencesJob($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExperiencesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The experiences job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experiences job could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $experiencesJobs;
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
		$this->ExperiencesJob->id = $id;
		$this->__findExperiencesJob($this->ExperiencesJob->id)
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExperiencesJob->delete()) {
			$this->Session->setFlash(__('Experiences job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Experiences job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	/**
	 * PRIVATE METHODS
	 */
	
	/**
	 * [__list description]
	 * @return [type] [description]
	 */
	private function __list()
	{
		$jobs        = $this->ExperiencesJob->Job->find('list');
		$experiences = $this->ExperiencesJob->Experience->find('list');
		$this->set(compact('jobs', 'experiences'));
	}


	private function __findExperiencesJob($id = NULL)
	{
		$options = array('conditions' => array('ExperiencesJob.' . $this->ExperiencesJob->primaryKey => $id));
		$experience = $this->ExperiencesJob->find('first', $options);
		if (empty($experience)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $experience;		
	}
}
