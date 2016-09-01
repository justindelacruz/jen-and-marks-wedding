<?
ob_start();
?>

<h1>
	Gift Registry
</h1>

<p style="text-align: center">
	Registered at <a href="http://www.bedbathandbeyond.com">Bed, Bath and Beyond</a><br />
	<br />
	<a href="http://www.bedbathandbeyond.com"><img src="images/bed_bath_beyond.gif" width="311" height="22" alt="Bed, Bath, and Beyond" border="0" /></a><br />
	<br />
	Complimentary gift packaging available
</p>

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "gift_registry");
?>