<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 */
class CompaniesController extends AppController {





/**
 * [index description]
 * @return [type] [description]
 */
public function index($filter = NULL)
{
	$companies = $this->Company->find("all", array('order' => array('Company.created DESC')));
	$this->set(compact('companies'));
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function view($id = null) {
		$company = $this->__findCompany($id);
		$this->set(compact('company'));
}





/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$companies = $this->Company->find("all", array('order' => array('Company.created DESC')));
		$this->set(compact('companies'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$company = $this->__findCompany($id);
		$this->set(compact('company'));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash("La Información ha sido guardada", "flash_info");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("La Información solicitada no ha sido guardada. Favor intente nuevamente", "flash_error");
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$company = $this->__findCompany($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash("La Información ha sido guardada", "flash_info");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("La Información solicitada no ha sido guardada. Favor intente nuevamente", "flash_error");
			}
		} else {
			$this->request->data = $company;
		}
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
		$this->Company->id = $id;
		$this->__findCompany($this->Company->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash("La Información ha sido eliminada", "flash_info");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash("La Información solicitada no ha sido eliminada. Favor intente nuevamente", "flash_error");
		$this->redirect(array('action' => 'index'));
	}


	/**
	 * PRIVATE METHODS
	 */
	/**
	 * [__findCompany description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	private function __findCompany($id = NULL)
	{
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$company  = $this->Company->find('first', $options);
		if (empty($company)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $company;
	}
}
