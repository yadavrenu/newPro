<?php
echo $this->Form->create('employees', array('url' => 'showdata','type' => 'get'));
echo $this->Form->button('Profile', array('type' => 'submit'));
echo $this->Form->end();
?>
