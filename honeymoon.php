<?
ob_start();
?>

<h1>
	Honeymoon, Baby!
</h1>

<p>
	After all the planning and partying has ended, we will be on a flight straight to Maui, Hawaii! Mark and I will be leaving for the Westin Maui on Sunday, July 22, 2007.  
</p>

<p>
	We’re looking forward to spending a long and restful vacation under the Hawaiian sun sipping coconut drinks adorned with pink floating umbrellas!  We can’t wait.  It’s almost as exciting as the wedding that precedes it!
</p>

<div align="center">
	<a href="http://www.westinmaui.com/"><img src="images/westin_maui.2.jpg" width="400" height="267" alt="Westin Maui" class="img_border" /></a><br />
	<a href="http://www.westinmaui.com/"><img src="images/westin_maui.1.jpg" width="400" height="208" alt="Westin Maui" class="img_border" /></a>
</div>

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "honeymoon");
?>