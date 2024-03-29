<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cadastros</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script text= "text/javascript" src ="validar.js"></script>
  
    </head>

    <body>
        
        <div class="col-6">  
         <form action="validar.php" method="post" name="formsDados">
            
            <div class="form-group">
                <label form="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control">
             </div>
    
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="cpf:">CPF:</label>
                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="contato">Contato:</label>
                <input type="text" name="contato" id="contato" placeholder="Digite seu contato" class="form-control">
            </div>
    
                <input type="submit" value="Cadastrar formulário" class="btn btn-primary" onclick="validar()">
                <input type="reset" value="Limpar" class="btn btn-warning">
           
    
        </form>
        </div>  
</body>
</html>
    