<div>
<span><h2><?=$userData['name']?></h2></span>
<span style="float:right"><?=$this->Html->link('Logout',array(
							 'controller' => 'employees',
							 'action' => 'logout'))?></span>
</div>
<table>
<tr><th>Emp Id</th><td><?=$userData['id']?></td></tr>
<tr><th>DOB</th><td><?=$userData['dob']?></td></tr>
<tr><th>Joining Date</th><td><?=$userData['joining_date']?></td></tr>
<tr><th>Company</th><td><?=$userData['company']?></td></tr>
<tr><th>Location</th><td><?=$userData['PSA']?></td></tr>
<tr><th>Cost Center</th><td><?=$userData['cost_center']?></td></tr>
<tr><th>Position</th><td><?$userData['position']?></td></tr>
<tr><th>Organization Unit</th><td><?=$userData['orgnization_unit']?></td></tr>
<tr><th>Bank Account number</th><td><?=$userData['bank_details']?></td></tr>
<tr><th>PF number</th><td><?=$userData['pf_number']?></td></tr>
<tr><th>Department</th><td><?=$userData['department']?></td></tr>
<tr><th>UAN number</th><td><?=$userData['UAN_number']?></td></tr>
<tr><th>PAN number</th><td><?=$userData['PAN_no']?></td></tr>
<tr><th>Manager Name</th><td><?=$userData['manager_name']?></td></tr>
<tr><th>Email ID:</th><td><?=$userData['email_id']?></td></tr>
<tr><th>Personal Email ID:</th><td><?=$userData['personal_email_id']?></td></tr>
<tr><th>Personal Mobile no:</th><td><?=$userData['mobile_no']?></td></tr>
<tr><th>Official Mobile no:</th><td><?=$userData['official_mobile_no']?></td></tr>
</table>
