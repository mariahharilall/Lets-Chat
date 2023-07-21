<?php

$path = getcwd().'/data';
$chatrooms =$_POST['chatrooms'];

if ($chatrooms == "room1"){
	file_put_contents($path.'/room1.txt',"");
	header('Location: admin.php?clear=success');
	exit();
}
else if ($chatrooms == "room2"){
	file_put_contents($path.'/room2.txt',"");
	header('Location: admin.php?clear=success');
	exit();

}
else if ($chatrooms == "room3"){
	file_put_contents($path.'/room3.txt',"");
	header('Location: admin.php?clear=success');
	exit();
}
else{
	header('Location: admin.php?notadmin=unsucessful');
}



?>