<?php
App::uses('AppController', 'Controller');
/**
 * Accesses Controller
 *
 * @property Access $Access
 */
class AccessesController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$accesses = $this->Access->find("all");
		$this->set(compact('accesses'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$access = $this->__findAccess($id);
		$this->set(compact('access'));
	}



// CUSTOM METHODS

// PRIVATE METHODS


private function __list(){
 	$users = $this->Access->User->find('list');
	$this->set(compact('users'));
}

public function __findAccess($id = null){
	$options = array('conditions' => array('Access.' . $this->Access->primaryKey => $id));
	$access  = $this->Access->find('first', $options);
	if (empty($access)) {
		$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
		$this->redirect(array('action'=>'index'));
	}
	return $access;
  }

}