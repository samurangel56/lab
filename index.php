<?php
$connectionInfo = array("UID" => "samu", "pwd" => "$4muD4t4", "Database" => "laboratorio", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:17051809.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
if($conn){echo "exito";}
else{echo "fail";die( print_r( sqlsrv_errors(), true));}
echo "hola mundo";
?>
