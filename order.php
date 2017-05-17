<?php
include "header.php";

?>
	<div id="wrapper">

	<!--Beställningsformulär -->
	<!-- Hämtar alla produkters namn från xml-filen -->
	<h1>Beställningsformulär</h1>
	<form id="form" name="order" method="post" action="result.php">
		Gul Paprika <input id="kr11" name="gulpaprika" type="text" size="3"><br>
		Röd paprika<input id="kr11" name="rödpaprika" type="text" size="3"><br>
		Gurka<input id="kr7" name="gurka" type="text" size="3"><br>
		Jord<input id="kr37" name="jord" type="text" size="3"><br>
		Krusbär<input id="kr61" name="krusbär" type="text" size="3"><br>
		Majs<input id="kr22" name="majs" type="text" size="3"><br>
		Nypon<input id="kr79" name="nypon" type="text" size="3"><br>
		Tomat<input id="kr11" name="tomat" type="text" size="3"><br>
		Tomat1<input id="kr11" name="tomat1" type="text" size="3"><br>
		Växthus<input id="kr12000" name="växthus" type="text" size="3"><br>
		<input type="submit" id="submitBtn" value="Skicka beställning">
	</form>

	


	<?php
	include 'footer.php';
	?>
<script type="text/javascript" src="script.js"></script>
</body></html>