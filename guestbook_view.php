<?
date_default_timezone_set('America/Los_Angeles');
$file = file("guestbook.db");

array_reverse($file);

foreach($file as $x)
{
	$entry = explode("|<|", $x);

	list($date, $email, $name, $message) = $entry;
	$email = html_entity_decode($email);
	$name = html_entity_decode($name);
	$message = html_entity_decode($message);

	?>

	<table>
		
		<tr>
			<td width="90" align="center" valign="top"><small><?= date("m/d/Y", $date) ?></small></td>

			<td>
				<?
				if(empty($email))
				{
					print $name."<br />";
				}
				else
				{
					print '<a href="mailto:'.$email.'">'.$name.'</a><br />';
				}
				?>

				<?= $message ?>
				<br />
				<br />&nbsp;
			</td>
		</tr>
	</table>
	</p>

	<?
}
?>