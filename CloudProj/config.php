<?php
global $con;
$con = mysqli_connect("localhost", "root", "1234") or die ('Cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'bloodb');
?>