<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	#txt{
		width: 500px;
		height: 200px;
	}
	#bp{
		margin-top: 20px;
	}
	#history{
		margin-top: 25px;
	}



</style>
<body>
	<h1>Admin Page</h1>
	<a href="index.html">Return to chat room</a>

	<?php
	$path = getcwd().'/data';
	$banned = file_get_contents($path.'/banned.txt');

	if (isset($_COOKIE['admin'])){

		print "<a href='logout.php'>Admin logout</a>";
		print "<p>Welcome ".$_COOKIE['admin']."</p>";
		print "Select from the dropdown to clear a chat room: ";
 	 ?>

 	 		<form method="POST" action="clearroom.php">
 	 			<select name ="chatrooms">
	 				<option value="default">Select a room</option>
	 				<option value="room1">Chat Room1</option>
	 				<option value="room2">Chat Room2</option>
	 				<option value="room3">Chat Room3</option>
 				</select>
 				<button id ="btn">Clear Room</button>
 	 		</form>
 	 		<?php
				if ($_GET['clear'] == 'sucsess'){
					print "You have sucessfully cleared the chat room";
				}

			?>

			<p id ="bp">Update banned words: </p>
			<?php
				if ($_GET['saved'] == 'success'){
					print "You have successfully saved the text";
				}

			?>
 	 		<form method="POST" action="savebanned.php">
 	 			<textarea id="txt" name ="banned_words"><?php  print $banned ?></textarea><br>
 	 			<input type="submit">
 	 		</form>
			<a id="history" href="admin_report.php">User Login History</a>



	<?php
	}
	else{
	?>

	<form method="post" action="login.php">
    	Username: <input type="text" name="admin_name"><br>
        Password: <input type="text" name="admin_pass"><br>
    	<input type="submit">
	</form>




	<?php
		};
	?>



</body>
</html>
