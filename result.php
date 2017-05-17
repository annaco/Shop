<?php
include "header.php";

?>
<html>
<body>
<!-- Visar det man beställt -->
Din order:<br>

<?php echo $_POST["gulpaprika"]. " st Gul paprika"; ?><br>
<?php echo $_POST["rödpaprika"]. " st Röd paprika"; ?><br>
<?php echo $_POST["gurka"]. " st gurka"; ?><br>
<?php echo $_POST["jord"]. " st jord"; ?><br>
<?php echo $_POST["krusbär"]. " st krusbär"; ?><br>
<?php echo $_POST["nypon"]. " st nypon"; ?><br>
<?php echo $_POST["tomat"]. " st tomat"; ?><br>
<?php echo $_POST["tomat1"]. " st tomat1"; ?><br>
<?php echo $_POST["växthus"]. " st växthus"; ?><br>


<?php
include 'footer.php';
?>
</body>
</html>