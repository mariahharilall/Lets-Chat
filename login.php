<?php

$admin_name = $_POST['admin_name'];
$admin_pass = $_POST['admin_pass'];


if ($admin_name && $admin_pass){
	$path = getcwd().'/data';
	$data = file_get_contents($path.'/admin.txt');
	$data2 = trim($data);
	$lines = explode(',', $data2);

	if ($admin_name == $lines[0] && $admin_pass == $lines[1]){
		print_r($Lines[0]);
		setcookie("admin",$lines[0]);
		header('Location: admin.php');
	}
	else{
		header('Location: admin.php?unvalid=incorrect');
	}

}
else{
	header('Location: admin.php?empty=unsucessful');
}






















?>