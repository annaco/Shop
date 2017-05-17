<?php
include "header.php";
	
?>
<div id="wrapper">
	<!-- Kontaktformulär -->
	<form class="contact" name="kontakt" method="post" action="form.php">
		Förnamn: <input type="text" id="firstname"><br>
		Efternamn: <input type="text" id="lastname"><br>
		Mailadress : <input type="text" id="mailadress"><br>
		Meddelande:<textarea name="message"></textarea><br>
		<input type="submit" id="submit" name="submit" value="Skicka">
	</form>

<?php
include 'footer.php';
?>
