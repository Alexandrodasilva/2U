<?php
$servername = "localhost"; // padrao  server local
$database = "2u"; // banco 2u do mysql
$username = "root"; // padrao root 
$password = ""; // não tem senha no banco, quando é criado 
//create connection
$conexao = mysqli_connect($servername, $username, $password, $database);
