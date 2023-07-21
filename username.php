<?php

$path = getcwd().'/data';

$nickname = $_POST['$nickname'];
if (strlen($nickname)==0){
	print "empty";

}
else if (strlen($nickname) > 0){
	print "ok";
	file_put_contents($path.'/history.txt',$u_name.","time().",".$_SERVER['REMOTE_ADDR'].","."entered chat room"."\n");
}

?>