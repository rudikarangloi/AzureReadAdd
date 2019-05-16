<?php

/*
Server=tcp:rudiwebappserver.database.windows.net,1433;
Initial Catalog=myfirstdatabase;
Persist Security Info=False;
User ID={rudi};
Password={Gendut76};
MultipleActiveResultSets=False;
Encrypt=True;
TrustServerCertificate=False;
Connection Timeout=30;	

$host = "rudiwebappserver.database.windows.net";	
$user = "rudi";	
$pass = "Gendut76";	
$name = "myfirstdatabase";	

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi,$name) or die("Tidak ada database yang dipilih!");

*/

try {
    $koneksi = new PDO("sqlsrv:server = tcp:rudiwebappserver.database.windows.net,1433; Database = myfirstdatabase", "rudi", "{Gendut76}");
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


$connectionInfo = array("UID" => "rudi@rudiwebappserver", "pwd" => "{Gendut76}", "Database" => "myfirstdatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rudiwebappserver.database.windows.net,1433";
$koneksi = sqlsrv_connect($serverName, $connectionInfo);

    if($koneksi)
        //echo "Connected!"


?>