<?
session_start();

function nl2br2($string)
{
	$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
	return $string;
}

if(!empty($_POST['word']))
{
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$message = htmlentities($_POST['message']);
	$message = nl2br2($message);

	$name = stripslashes($name);
	$email = stripslashes($email);
	$message = stripslashes($message);
	$date = time();
	
	$string = $date."|<|".$email."|<|".$name."|<|".$message."\r\n";
	$filename = "guestbook.db";

	if(!is_writable($filename))
	{
		print "Sorry, there was a problem adding your entry.";
	}
	else
	{
		$fp = fopen($filename, "a") or die("Unable to open database.");
		fwrite($fp, $string) or die("Unable to write to database.");
		fclose($fp);
		header("Location: guestbook.php?m=100");
	}
}
else
{
	exit("Sorry, you entered the wrong confirmation word. Go back and try again.");
}
?>