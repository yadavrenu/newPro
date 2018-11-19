<?php
App::uses('AppController', 'Controller');

class EmployeesController extends AppController {

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
		$this->autoRender = false;
		echo 'logged in';
	}
}
?>
