<?php 

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome, email, profissao) values ('$nome', '$email', '$profissao')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css/style.css">
    <title>Teste 01 Mysql</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
              <a href="index.php"><li>Cadastro</li></a>  
              <a href="consulta.php"><li>Consulta</li></a>  
            </ul>
        </nav>
        <section>
            <h1>Confirmação de cadastro</h1>
            <hr><br><br>

                <?php 
                
                if($linhas == 1) {
                    print "Cadastro efetuado com sucesso!";
                }else{
                    print "Cadastro NÃO efetuado! <br>Já existe um usuário com este e-mail";
                }
                ?> <br><br>

                <button class="btn"><a id="voltar" href="index.php">Voltar</a></button><br><br>
                
        </section>
    </div>
</body>
</html>