<?php
	$uname = $_POST['name'];
	$uemail = $_POST['email'];
	$ip = $_SERVER['REMOTE_ADDR'];	// ip address of the remote
	
	// organize an echo string back to the client
	$str = "Welcomes you " . $uname . ", your email is " . $uemail . " from " . $ip . "\n";
	// echo it back
	echo $str;

	// the rest of code will store data to a log file
	$today = date("Y-m-d H:i:s");	// timestamp of this reception
	$record = $today . "," . $uname . "," . $uemail . "," . $ip . "\n";
	
	$file = "event.log";	// specify the file name
	if(file_exists($file))
		$fp = fopen($file, "a");	// open the file in appending mode
	else
		$fp = fopen($file, "w");	// else open the file in writing mode
	fwrite($fp, $record);	// wirte record to the file
	fclose($fp);			// close the open file
	echo "Data is logged\n";
?>
