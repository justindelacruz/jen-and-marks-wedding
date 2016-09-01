<?
ob_start();
?>

<div align="center">
	<img src="images/jenmark.01.jpg" class="img_border" alt="" />
</div>

<h1>
	Hello Friends and Family!
</h1>

<h2>
	Welcome to our wedding website.
</h2>

<p>
	Welcome to our wedding website. Here you'll find all the information you'll need for our wedding. This site is still under construction so please check back often as more details are being added. 
</p>

<p>
	I can't believe it-- our relationship has almost reached the five year mark! Who would have ever guessed! Well, actually Mark and I could. Though we never said it aloud, we knew right away there would be no one else.
</p>

<p>
	It's definitely an amazing feeling to be in love, and to know there is no one else who can fill our hearts in the same way. It's best said there's no one else we'd rather stroll through farmers' market with, or devour Oreo ice cream sandwiches with, or go movie-rental hunting with. We know we're in love when, at the end of the day, all we remember are the simple pleasures we've shared together.
</p>

<p>
	We hope that everyone, at some point, can know what it's like to be in love this way. Simply said, we think it's wonderful.
</p>

<p>
Thanks so much,<br />
<img src="images/signature.png" alt="Jennifer and Mark" />
</p>

<?
$page = ob_get_contents();
ob_end_clean();

require_once("body.php");
body($page, "index");
?>