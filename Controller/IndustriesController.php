<?php
App::uses('AppController', 'Controller');
/**
 * Industries Controller
 *
 * @property Industry $Industry
 */
class IndustriesController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$industries = $this->Industry->find("all", array('order' => array('Industry.created DESC')));
		$this->set(compact('industries'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$industry = $this->__findIndustry($id);
		$this->set(compact('industry'));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Industry->create();
			if ($this->Industry->save($this->request->data)) {
				$this->Session->setFlash(__('The industry has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industry could not be saved. Please, try again.'));
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
		$industry = $this->__findIndustry($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Industry->save($this->request->data)) {
				$this->Session->setFlash(__('The industry has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industry could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $industry;
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
		$this->Industry->id = $id;
		$this->__findIndustry($this->Industry->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->Industry->delete()) {
			$this->Session->setFlash(__('Industry deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industry was not deleted'));
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
		$jobs = $this->Industry->Job->find('list');
		$this->set(compact('jobs'));
	}

	/**
	 * [__findIndustry description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	
	private function __findIndustry($id = NULL)
	{
		$options  = array('conditions' => array('Industry.' . $this->Industry->primaryKey => $id));
		$industry = $this->Industry->find('first', $options);
		if (empty($industry)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $industry;
	}
}
