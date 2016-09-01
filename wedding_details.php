<?
date_default_timezone_set('America/Los_Angeles');

ob_start();
?>

<h1>
	Wedding Details
</h1>

<h2>
	The Big Day
</h2>

<p>
	Our wedding will be on Saturday, July 21, 2007 at 10:00 a.m. at the <a href="http://www.hilton.com/en/hi/hotels/index.jhtml?ctyhocn=NWKNHHF">Hilton Hotel</a> in Newark, CA.  The ceremony will take place in the Garden Courtyard with the reception immediately following in the Grand Ballroom.
</p>

<div align="center">
	<p>

		<img src="images/hilton.1.jpg" width="340" height="218" alt="The Hilton Hotel" class="img_border" /><br />
		<img src="images/hilton.2.jpg" width="340" height="255" alt="The Hilton Hotel" class="img_border" /><br />

		<strong>Hilton Hotel</strong><br />
		39900 Balentine Drive<br />
		Newark, CA 94560<br />
		(510) 490-8390
	</p>
</div>

<p>
	Remember &ndash; bring your smiles, your cameras and your tissues.  It will definitely be a day to remember!
</p>

<p style="text-align: center;" class="serif">
	FORMAL ATTIRE
</p>

<div align="center">

	<p>
		<embed src="http://netwx.accuweather.com/netWx-v26.swf?lang=eng&zipcode=94560&size=6&theme=3&metric=0" width="435" height="90" name="netWxV6" type="application/x-shockwave-flash" />
	</p>

	<p class="serif img_border" style="font-size: 24px">
		<?
		// Get days until the wedding
		// July 21, 2007
		$end = strtotime("July 21, 2007");
		$now = time();
		$countdown = $end - $now;
		$countdown /= 60;
		$countdown /= 60;
		$countdown /= 24;
		$countdown = round($countdown, 0);
		?>

		<?= $countdown ?> Days until the Wedding
	</p>
	
</div>
        

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "wedding_details");
?>