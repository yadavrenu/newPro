
<h3>Welcome - <?=AuthComponent::user('name')?></h3>

<?php echo $this->Html->link(
    'View Profile',
    array(
		'controller' => 'employees',
		'action' => 'profile'
	)
);
?>
