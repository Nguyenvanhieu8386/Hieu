<?php
header('Access-Control-Allow-Origin:*');//quyen docdu lieu
$s="localhost";$u="root";$p="";$db="a4";//thong tin csdl
$conn = new mysqli($s,$u,$p,$db);//ket noi scdl
$reslt = $conn -> query("select * from mytable");// Truy van du lieu
while($row[]=$reslt->fetch_assoc()){
    $json = json_encode($row);//chuyen mang sang json
}
echo '{"products":'.$json.'}';//print
$conn->close();// dong ket noi