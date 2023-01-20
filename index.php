<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css">
        body{
            background-color: LightSlateGray;
        }
        #tamanhoContainer{
            width: 500px;
        }
    </style>
    <title>Processo Seletivo 2U</title>
</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4>Teste do processo seletivo Tecnologia 2U 2023</h4>
        <form method="POST" action="inserir_cadastro.php" style="margin-top: 20px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >CEP</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="cep" placeholder="EX.: 00000-000" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Endereço</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="endereco" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Bairro</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="bairro" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Estado</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="estado" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Municipio</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="municipio" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >complemento</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="complemento">
            </div>
            <div style="text-align: right;">
                <button type="submit" class="btn btn-success bnt-small">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
    <script src="buscarApi.js"></script>
</body>
</html>