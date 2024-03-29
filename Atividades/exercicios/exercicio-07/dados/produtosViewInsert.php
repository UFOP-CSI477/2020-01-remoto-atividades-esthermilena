<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./produtosViewInsert.css">    
    <title>Inserir produtos</title>
</head>
<body>
    
    <div class="container-fluid">
    <h1 class="text-center">Insira os produtos</h1>
    <form action="produtosControllerInsert.php" method="post">

        <div class="form-group col-md-6">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Insira o nome do produto">
        </div>

        <div class="form-group col-md-6">
            <label for="um">Unidade de medida (peça, quilo, litro, metro):</label>
            <input type="text" name="um" id="um" placeholder="Digite aqui">
        </div>

        <input type="submit" value="Inserir" class="btn btn-primary">

    </form>
    </div>
</body>
</html>