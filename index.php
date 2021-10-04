<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:17051809.database.windows.net,1433; Database = laboratorio", "samu", "$4muD4t4");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
