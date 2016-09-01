<?
ob_start();
?>

<h1>
	Guestbook
</h1>

<p>
	Please leave us your special messages and well wishes.
</p>

<?
if(isset($_GET['m']))
{
	if($_GET['m'] == "100")
	{
		print "<p><b>Thank you! Your message has been posted.</b></p>";
	}
}
?>

<? include "guestbook_view.php" ?>

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "guestbook");
?>