<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");

$con=mysqli_connect("sql306.epizy.com","epiz_27124952","sDak701tWxcYCy","epiz_27124952_social")

?>