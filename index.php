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
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>

            <form method="post" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                <label for="nome">Nome</label><br>
                <input type="text" name="nome" class="campo" maxlenght="48" required autofocus placeholder="Digite aqui..."><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="campo" maxlenght="50" required placeholder="Digite aqui..."><br>

                <label for="profissao">Profissão</label><br>
                <input type="text" name="profissao" class="campo" maxlenght="48" required placeholder="Digite aqui...">
            </form>
        </section>
    </div>
</body>
</html>