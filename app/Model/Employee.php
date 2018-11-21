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

	// public function beforeSave ($options = array()) {
    //     $this->data['Employee']['password'] = AuthComponent::password($this->data['Employee']['password']);
    //     return true;
	// }
}
?>
