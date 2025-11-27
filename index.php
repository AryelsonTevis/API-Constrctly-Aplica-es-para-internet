<?php
session_start();
include "generic/Autoload.php";
include "imports/vendor/autoload.php";

use generic\Controller;


$rota = $_GET["param"] ?? "usuario/login";
$controller = new Controller();
$controller->verificarChamadas($rota);