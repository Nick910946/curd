<?php
session_start();

if (empty($_SESSION['email']))
{
	header("location:mpct_login.php");
}



?>