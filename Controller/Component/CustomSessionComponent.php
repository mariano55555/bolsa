<?php
App::uses('Component', 'Controller');
class CustomSessionComponent extends Component {

	
   public $components = array('Session');
   
	public function sessionstorage($storagename = NULL, $value = NULL)
	{
		return $this->Session->write($storagename, $value);
	}

	public function sessiondelete($storagename = NULL)
	{
		$this->Session->delete($storagename);
	}
}