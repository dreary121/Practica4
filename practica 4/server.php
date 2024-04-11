<?php
require_once "lib/nusoap.php"; 
function getEstados ($datos) {
if ($datos == "Estados") { 
    return join(", ", array(
    "Chiapas", 
    "Tabasco",
    "Veracruz",
    "Oaxaca"));
    }
else {
return "No hay estados";
}
}
$server = new soap_server();//creamos Instancia de SOAP
$server->register("getEstados"); //Indica el metodo o función a devolver
if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input' );
$server->service ($HTTP_RAW_POST_DATA);