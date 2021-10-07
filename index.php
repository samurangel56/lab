<?php
$connectionInfo = array("UID" => "samu", "pwd" => "$4muD4t4", "Database" => "laboratorio", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:17051809.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
