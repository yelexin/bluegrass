<?php
session_start();
echo json_encode(array('ok'=>(int)($_SESSION["authum_session"] == $_GET["code"])));
?>

