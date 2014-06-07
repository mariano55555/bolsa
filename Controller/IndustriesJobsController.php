<?php
App::uses('AppController', 'Controller');
/**
 * IndustriesJobs Controller
 *
 * @property IndustriesJob $IndustriesJob
 */
class IndustriesJobsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$industriesJobs = $this->IndustriesJob->find("all", array('order' => array('IndustriesJob.created DESC')));
		$this->set(compact('industriesJobs'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$industriesJob = $this->__findIndustriesJobs($id);
		$this->set(compact('industriesJob'));
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
		$industriesJob = $this->__findIndustriesJobs($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndustriesJob->save($this->request->data)) {
				$this->Session->setFlash(__('The industries job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industries job could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $industriesJob;
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
		$this->IndustriesJob->id = $id;
		$this->__findIndustriesJobs($this->IndustriesJob->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->IndustriesJob->delete()) {
			$this->Session->setFlash(__('Industries job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industries job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * 	private methods
	 */
	
	/**
	 * [__list description]
	 * @return [type] [description]
	 */
	private function __list()
	{
		$industries = $this->IndustriesJob->Industry->find('list');
		$jobs       = $this->IndustriesJob->Job->find('list');
		$this->set(compact('industries', 'jobs'));
	}
	/**
	 * [__findIndustriesJobs description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	private function __findIndustriesJobs($id = NULL)
	{
		$options = array('conditions' => array('IndustriesJob.' . $this->IndustriesJob->primaryKey => $id));
		$data    = $this->IndustriesJob->find('first', $options);
		if (empty($data)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $data;				
	}
}
