<?php
App::uses('AppController', 'Controller');
/**
 * Experiences Controller
 *
 * @property Experience $Experience
 */
class ExperiencesController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$experiences = $this->Experience->find("all", array('order' => array('Experience.created DESC')));
		$this->set(compact('experiences'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$experience = $this->__findExperience($id);
		$this->set(compact('experience'));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Experience->create();
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
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
		$experience = $this->__findExperience($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $experience;
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
		$this->Experience->id = $id;
		$experience = $this->__findExperience($this->Experience->id);
		$this->request->onlyAllow('post', 'delete');
		if ($this->Experience->delete()) {
			$this->Session->setFlash(__('Experience deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Experience was not deleted'));
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
	private function __list(){
		$jobs = $this->Experience->Job->find('list');
		$this->set(compact('jobs'));
	}

	/**
	 * [__findExperience description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	
	private function __findExperience($id = NULL)
	{
		$options    = array('conditions' => array('Experience.' . $this->Experience->primaryKey => $id));
		$experience = $this->Experience->find('first', $options);
		if (empty($experience)) {
			$this->Session->setFlash("La Información solicitada no ha sido encontrada.", "flash_error");
			$this->redirect(array('action'=>'index'));
		}
		return $experience;
	}
}
