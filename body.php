<?
function body($page = "", $menu = "index")
{
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
	<title>Jennifer and Mark's Wedding Celebration</title>

	<link rel="stylesheet" href="style.css" type="text/css" />

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<div align="center">


	<div class="ydsf">

	<div id="container">

	<div id="container_1">

		<div id="header">

			<img src="images/header.1.jpg" alt="" /><br />
			<img src="images/header.2.jpg" alt="A Wedding Celebration" /><br />
			Jen and Mark<img src="images/header.3.jpg" align="middle" alt="Jennifer and Mark - July 21, 2007" />July 21, 2007

		</div>
		
		<div id="body">

			<div id="body_menu">

				<div align="center">

					<img src="images/jenmark.2.jpg" alt="" style="padding: 12px;" />

				</div>

				<div id="menu">

					<ul>
						<li><a <? if($menu == "index") { ?>			class="active" <? } ?> href="." >Welcome</a></li>
						<li><a <? if($menu == "our_story") { ?>		class="active" <? } ?> href="our_story.php">Our Story</a></li>
						<li><a <? if($menu == "bridal_party") { ?>	class="active" <? } ?> href="bridal_party.php">Bridal Party</a></li>
						<li><a <? if($menu == "bridal_shower") { ?> class="active" <? } ?> href="bridal_shower.php">Bridal Shower</a></li>
						<li><a <? if($menu == "gift_registry") { ?> class="active" <? } ?> href="gift_registry.php">Gift Registry</a></li>
						<li><a <? if($menu == "wedding_details") { ?> class="active" <? } ?> href="wedding_details.php">Wedding Details</a></li>
						<li><a <? if($menu == "honeymoon") { ?> class="active" <? } ?> href="honeymoon.php">Honeymoon, Baby!</a></li>
						<li><a <? if($menu == "guestbook") { ?> class="active" <? } ?> href="guestbook.php">Wedding Guestbook</a></li>
					</ul>
					
				</div>


			</div>


			<div id="body_main">

				<div id="subtitle">
					<img src="images/blank.gif" width="200" height="25" alt="" />
				</div>

				<div class="body">

					<?= $page ?>
	
				</div>

			</div>

			<br style="clear: both;" />

		</div>

	</div>

	</div>

	</div>

</div>

<br />

<div class="copyright serif" align="center">
	a Design by Justin Dela Cruz<br />
	www.jenandmarkswedding.net
</div>

</body>

</html>

<?
}
?>