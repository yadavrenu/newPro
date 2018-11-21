<?php
App::uses('AppController', 'Controller');

class EmployeesController extends AppController {

	//public $virtualFields = array('manager_name');

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				echo 'logged in';
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	public function dashboard() {
	//	$this->autoRender = false;
	//	echo 'logged in';
	}
	public function showdata(){
		$rm_code=$this->Auth->user('rm_code');
		$result = $this->Employee->find('first',array(
			'conditions' => array('Employee.code' => $rm_code)));
		$_SESSION['Auth']['User']['manager_name'] = $result['Employee']['name'];
		$this->set('datas', $this->Auth->user());
	}
}
?>
