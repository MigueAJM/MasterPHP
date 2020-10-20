<?php
//CONEXION
$server = 'localhost';
$user = 'miguelajm';
$password = 'holamundo';
$database = 'blog_master';
$db = mysqli_connect($server, $user, $password, $database);
mysqli_query($db, "SET NAMES 'utf8'");

//INICIAR LA SESSION
session_start();