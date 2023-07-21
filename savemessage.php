<?php

//grab the data from the client
$message = $_POST['message'];
$u_name = $_POST['u_name'];
$chats = $_POST['chats'];
$path = getcwd().'/data';

$usedWord = false;
if (strlen($message)==0){
	echo "message too short";
}
else{
	//store this data into a text file
	//file_put_contents($file_path."/adminlog.txt",time().",".$_COOKIE['username'].","."edit"."\n",FILE_APPEND);
	file_put_contents($path.'/history.txt',$u_name.",".time().",".$_SERVER['REMOTE_ADDR'].",".$chats."\n",FILE_APPEND);
	$message = preg_replace("/[^A-Za-z0-9 !.,'';]/", "", $message);
	$data = file_get_contents($path.'/banned.txt');
	$data2 = trim($data);
	$words = explode(' ', $data2);
	$msg_words = explode(" ", $message);

	foreach ($msg_words as $msg_word){
		if (in_array($msg_word, $words)){
			$usedWord = true;
			break;
		}

	}

	if($usedWord == true){
		echo "banned";
	}
	else{
		file_put_contents($path.'/'.$chats.'.txt', "$u_name : $message"."\n", FILE_APPEND);
		print "no problem";
	}


	//tell the client we are done


}



?>
