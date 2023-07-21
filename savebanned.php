<?php
$path = getcwd().'/data';
$banned_words = $_POST['banned_words'];

file_put_contents($path.'/banned.txt', $banned_words);
header('Location: admin.php?saved=success');
exit();



?>