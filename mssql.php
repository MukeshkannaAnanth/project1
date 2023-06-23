<?php

$servername = "DESKTOP-QVKSA13";
$username = "cdss_kailash";
$password = "pcbnl123";
$dbname = "pcnldb_kailash";


$dsn = "sqlsrv:Server=$servername;database=$dbname;";
try {
    $db = new PDO($dsn, $username, $password);  
} catch (PDOException $th) {
    echo "db not connected".$th->getMessage();
}

$select = $db->query('select * from cash');
while($row = $select->fetch(PDO::FETCH_OBJ)){
    echo $row->cno."<br>";
}
?>