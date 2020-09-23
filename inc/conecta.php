<?php

$host = 'localhost';
$user = 'root';
$pass ='root';
$bd = 'agenda';

/*
//procedural style
$conn = mysqli_connect($host,$user,$pass,$bd);
*/

$conn = new mysqli($host,$user,$pass,$bd);


if($conn->connect_errno){
	echo "Ocorreu um erro na conexao com o Banco de Dados";
	exit;
}
$conn->set_charset('utf8');