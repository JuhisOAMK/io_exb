<?php include '../model/user_model.php'; ?>

<?php
	$insert_data=array(
		'id'=>$_POST['id'],
		'id'=>$_POST['fn'],
		'id'=>$_POST['ln'],
	);
	add_user($insert_data);
?>
