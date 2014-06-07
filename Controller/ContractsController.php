<?php
App::uses('AppController', 'Controller');
/**
 * Contracts Controller
 *
 * @property Contract $Contract
 */
class ContractsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$contracts = $this->Contract->find("all", array('order' => array('Contract.created DESC')));
		$this->set(compact('contracts'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$contract = $this->__findContract($id);
		$this->set(compact('contract'));
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
		$contract = $this->__findContract($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $contract;
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
		$this->Contract->id = $id;
		$this->__findContract($this->Contract->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contract->delete()) {
			$this->Session->setFlash(__('Contract deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contract was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	/**
	 * PRIVATE METHOD
	 */
	
	private function __list()
	{
		$jobs = $this->Contract->Job->find('list');
		$this->set(compact('jobs'));
	}


	private function __findContract($id = NULL)
	{
		$options  = array('conditions' => array('Contract.' . $this->Contract->primaryKey => $id));
		$contract = $this->Contract->find('first', $options);
		if (empty($contract)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $contract;
	}
}
