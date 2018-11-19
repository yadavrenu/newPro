<h2><center>Login here</center></h2>
<?php
	echo $this->Form->create('Employee');
	echo $this->Form->input('Employee.code', array('label' => 'Employee code'));
	echo $this->Form->input('Employee.password',array('label' => 'Password'));
	echo $this->Form->submit('Login');
	echo $this->Form->end();

?>
