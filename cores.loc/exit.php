<?php
$_SESSION['user']['id_payer']='';
session_destroy();
header('Location: index.php');
?>