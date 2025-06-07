<?php
$host='localhost';
$usuario='root';
$senha='';
$banco='cadastro_bd';
$conn = new mysqli($host,$user,$senha,$banco);

if($conn->connect_error){
die("erro na conexão:". $conn->connect_error);


}


?>