<?php

ob_start();
session_start();
if (!isset($_SESSION["login"])  ||  !isset($_SESSION["senha"]) )
{
  header("location: ../index.php");	
  exit;
}
ob_clean();
?>


