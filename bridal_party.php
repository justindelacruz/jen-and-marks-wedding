<?
ob_start();
?>

<h1>
	The Bridal Party
</h1>

<h2>
	The Couple
</h2>

<div align="center">
	<img src="images/bridal_party/couple.jpg" width="350" height="235" alt="" class="img_border" />
</div>

<br />

<h2>
	The Girls...
</h2>

<table style="text-align: center" class="bridal_party">

	<tr>

		<td>
			<img src="images/bridal_party/soups.jpg" width="113" height="160" alt="" class="img_border" /><br />
			<strong>Soupharack Vannasing</strong><br />
			Maid of Honor
		</td>

		<td>
			<img src="images/bridal_party/linda.jpg" width="132" height="160" alt="" class="img_border" /><br />
			<strong>Linda Nhem</strong><br />
			Bridesmaid
		</td>

		<td>
			<img src="images/bridal_party/april.jpg" width="97" height="160" alt="" class="img_border" /><br />
			<strong>April Panganiban</strong><br />
			Bridesmaid
		</td>
	
	</tr>

	<tr>

		<td>
			<img src="images/bridal_party/janelle.jpg" width="110" height="160" alt="" class="img_border" /><br />
			<strong>Janelle Capistrano</strong><br />
			Bridesmaid
		</td>

		<td>
			<img src="images/bridal_party/jeredith.jpg" width="94" height="160" alt="" class="img_border" /><br />
			<strong>Jeredith Livelo</strong><br />
			Bridesmaid
		</td>

		<td>
			<img src="images/bridal_party/becky.jpg" width="133" height="160" alt="" class="img_border" /><br />
			<strong>Rebecca Wright</strong><br />
			Bridesmaid
		</td>
	
	</tr>

	<tr>

		<td>
			&nbsp;
		</td>

		<td>
			<img src="images/bridal_party/mathilde.jpg" width="120" height="160" alt="" class="img_border" /><br />
			<strong>Mathilde Javier</strong><br />
			Bridesmaid
		</td>

		<td>
			&nbsp;
		</td>
	
	</tr>

</table>

<br />

<h2>
	The Boys...
</h2>

<table style="text-align: center">

	<tr>

		<td>
			<img src="images/bridal_party/christian.jpg" width="120" height="160" alt="" class="img_border" /><br />
			<strong>Christian Javier</strong><br />
			Best Man
		</td>

		<td>
			<img src="images/bridal_party/justin.2.jpg" width="121" height="160" alt="" class="img_border" /><br />
			<strong>Justin Gaerlan</strong><br />
			Groomsman
		</td>

		<td>
			<img src="images/bridal_party/edmund.jpg" width="107" height="160" alt="" class="img_border" /><br />
			<strong>Edmund Manuel</strong><br />
			Groomsman
		</td>
	
	</tr>

	<tr>

		<td>
			<img src="images/bridal_party/justin.1.jpg" width="121" height="160" alt="" class="img_border" /><br />
			<strong>Justin Dela Cruz</strong><br />
			Groomsman
		</td>

		<td>
			<img src="images/bridal_party/albert.jpg" width="121" height="160" alt="" class="img_border" /><br />
			<strong>Albert Valles</strong><br />
			Groomsman
		</td>

		<td>
			<img src="images/bridal_party/eddie.jpg" width="118" height="160" alt="" class="img_border" /><br />
			<strong>Eddie Baiza</strong><br />
			Groomsman
		</td>
	
	</tr>
	
	<tr>
	
		<td>&nbsp;</td>
		
		<td>
			<img src="images/blank.gif" width="125" height="160" alt="" class="img_border" /><br />
			<strong>Marlo Berania</strong><br />
			Groomsman
		</td>

		<td>&nbsp;</td>

</table>

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "bridal_party");
?>