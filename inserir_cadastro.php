<?php

    include 'conexao.php';

    $nome=$_POST["nome"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $estado = $_POST["estado"];
    $municipio = $_POST["municipio"];
    $complemento = $_POST["complemento"];

$sql = "INSERT INTO `cadastro`( `nome`, `cep`, `endereco`, `bairro`, `estado`, `municipio`, `complemento`) 
    VALUES ('$nome','$cep','$endereco','$bairro','$estado','$municipio','$complemento')";

    $inserir = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container" style="margin-top: 75px"> 
    <center>  
        <h4> cadastro com sucesso!!</h4>
        <div style="margin-top: 20px" >
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Novo cadastro</a>
        </div>
    </center>
</div>