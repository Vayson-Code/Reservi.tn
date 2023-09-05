<?php
include './ClientC.php';
$clientC = new ClientC();
$clientC->deleteUser($_GET["idClient"]);
header('Location:tables.php');
