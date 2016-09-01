<?
ob_start();
?>

<h1>
	Bridal Shower
</h1>

<p>
	Ladies, please join us for the bridal shower on Sunday, May 6, 2007 at 11:30 a.m.  It will be held at Sirayvah Restaurant in San Carlos.
</p>

<p> 
	
</p>

<div align="center">
	<p>
		<strong>Sirayvah Organic Thai Cuisine</strong><br />
		366 El Camino Real<br />
		San Carlos, CA 94070 
	</p>

	<br />

	<img src="images/sirayvah_map.gif" width="309" height="289" alt="Sirayvah Organic Thai Cuisine Map" />
</div>        

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "bridal_shower");
?>