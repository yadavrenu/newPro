<?php
App::uses('AppModel', 'Model');

class Employee extends AppModel {

	public $name = 'Employee';

	public $validate = array(
        'code' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        )
	);

	public $virtualFields = array('manager_name' => 'null');

	// public function beforeSave ($options = array()) {
    //     $this->data['Employee']['password'] = AuthComponent::password($this->data['Employee']['password']);
    //     return true;
	// }

	public function getManagerName() {
        $user = $this->find('first', array(
            'conditions' => array('code' => AuthComponent::user('rm_code'))
        ));

        if ($user && $user['Employee']['name'])
            return $user['Employee']['name'];
        else
            return '';
    }
}
?>
