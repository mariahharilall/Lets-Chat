<?php  

$path = getcwd().'/data';

setcookie('admin',"",time()-3600);
header('Location: index.html');
exit();



?>