<?php
App::uses('AppController', 'Controller');

class EmployeesController extends AppController {

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				$managerName = $this->Employee->getManagerName();
                $this->Session->write("Auth.User.manager_name",$managerName);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	public function dashboard() {

	}

	public function profile() {
		$userData = $this->Auth->user();
		$this->set('userData',$userData);
	}
}
?>
