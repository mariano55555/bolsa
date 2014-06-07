<?php
App::uses('AppController', 'Controller');
/**
 * ContractsJobs Controller
 *
 * @property ContractsJob $ContractsJob
 */
class ContractsJobsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$contractsJobs = $this->ContractsJob->find("all", array('order' => array('ContractsJob.created DESC')));
		$this->set(compact('contractsJobs'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$contractsJob = $this->__findContractsJob($id);
		$this->set(compact('contractsJob'));
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
		$contractsJobs = $this->__findContractsJob($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContractsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The contracts job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contracts job could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $contractsJobs;
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
		$this->ContractsJob->id = $id;
		$this->__findContractsJob($this->ContractsJob->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContractsJob->delete()) {
			$this->Session->setFlash(__('Contracts job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contracts job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * PRIVATE METHODS
	 * 
	 */
	

	/**
	 * [__list description]
	 * @return [type] [description]
	 */
	private function __list()
	{
		$jobs      = $this->ContractsJob->Job->find('list');
		$contracts = $this->ContractsJob->Contract->find('list');
		$this->set(compact('jobs', 'contracts'));
	}
	/**
	 * [__findContractsJob description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	private function __findContractsJob($id = NULL)
	{
		$options  = array('conditions' => array('ContractsJob.' . $this->ContractsJob->primaryKey => $id));
		$contract = $this->ContractsJob->find('first', $options);
		if (empty($contract)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $contract;
	}
}
