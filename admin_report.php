<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = getcwd().'/data';

if (isset($_COOKIE['admin'])){
	$data = trim(file_get_contents($path.'/history.txt'));
	$data2 = explode("\n",$data);

	print "<table style = 'margin:auto; border:1px solid black;'>";
	print "<tr style = 'margin:auto; border:1px solid black;'>";
	print "<td style = 'margin:auto; border:1px solid black;'>Name</td>";
	print "<td style = 'margin:auto; border:1px solid black; text-align: center;'>Date</td>";
	print "<td style = 'margin:auto; border:1px solid black;'>IP Address</td>";
	print "<td style = 'margin:auto; border:1px solid black;'>Activity</td>";
	print "</tr>";

	for ($i = 0; $i < count($data2); $i++){
		$info = explode(",", $data2[$i]);
		print "<tr style = 'margin:auto; border:1px solid black; padding:5px;'>";
		print "<td style = 'margin:auto; border:1px solid black; padding:5px;'>".$info[0]."</td>";
		print "<td style = 'margin:auto; border:1px solid black; padding:5px;'>".date('Y-m-d H:i:s',$info[1])."</td>";
		print "<td style = 'margin:auto; border:1px solid black; padding:5px;'>".$info[2]."</td>";
		print "<td style = 'margin:auto; border:1px solid black; text-align: center; padding:5px;'>".$info[3]."</td>";
	    print "</tr>";
}

	print"</table>";
}
else{
	header('Location: admin.php?login=unsuccessful');
	exit();
}
?>
