<?php 
    include_once("conexao.php");

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    //seleciona tudo do banco de dados, que estiver antes e depois do que esta digitado!
    $sql ="select * from usuarios where profissao like '%$filtro%'";
    $consulta  = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos2.css/style.css">
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
            <h1>Consultas</h1>
            <hr><br><br>

            <form action="" method="get">
                <label for="pesquisar">Filtrar por profissão: </label>
                <input type="text" name="filtro" class="campo" required autofocus>

                <input type="submit" value="Pesquisar" class="btn">
            </form>
                <?php 

                    print "Resultado da pesquisa com a palavra: <strong>$filtro</strong><br><br>";
                    print "$registros registros encontrados.";
                    print "<br><br>";

                    while($exibirRegistros = mysqli_fetch_array($consulta)){

                        $codigo     = $exibirRegistros[0];
                        $nome       = $exibirRegistros[1];
                        $email      = $exibirRegistros[2];
                        $profissao  = $exibirRegistros[3];

                        print "<article>";
                        
                        print "$codigo.<br>";
                        print "Nome: $nome<br>";
                        print "Email: $email<br>";
                        print "Profissão: $profissao";

                        print "</article>";
                    }

                    mysqli_close($conexao);

                ?> 
        </section>
    </div>
</body>
</html>