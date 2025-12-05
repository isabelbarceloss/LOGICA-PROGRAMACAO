<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <!-- Integrantes do Grupo:
     Isabel Barcelos Agualuza 11251101322
     Isabela Pereira de Brito 11251100580
     João de Lima Vernosi Diniz 11251102193
     Raquel Layane Silva 11251101679 -->
    
    <!-- cabeçalho -->
    <header>
        
        <figure class="logo-container">
            <img class="logo" src="img/logo e favicon/logo softglow.png" alt="Logo SoftGlow">
        </figure>
    </header>

    <!-- recebe as informações e insere no banco -->
    <?php 
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $descricao = $_POST['descricao'];
    ?>

    <main class="conteudo">
        <br>
        <h2 class="titulo">Cadastro realizado com sucesso!</h2>

        <p class="sobre">O produto foi adicionado à base de dados. Ele ficará disponível para consulta, edição e acompanhamento na página de dados cadastrados.</p>
        <br>
        <div class="link">
            <a class="botao" href="cadastro.php">VOLTAR</a>
        </div>
    </main>

    <?php
        // requisição das informações da página conexao.php
        require_once('conexao.php');

        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $descricao = $_POST['descricao'];

        // conectando ao banco de dados
        $bancoDados = new db();
        $link = $bancoDados -> conecta_mysql();

        // inserindo tabela produtos os valores das respectivas variáveis
        $sql = "insert into produtos (nome, categoria, preco, quantidade, descricao)
        values('$nome', '$categoria', '$preco', '$quantidade', '$descricao')";

        // acesso
        mysqli_query($link, $sql);
    ?>
    <br><br><br>
    <footer>
            <p>
                <strong>Entre em Contato com a Gente!</strong>
                <br><strong>Email:</strong> softglow@softglow.com
                <br><strong>Telefone:</strong> (12) 12345-6789
                <br><br><strong>Desenvolvedores: Isabel Barcelos, Isabela Pereira, João Diniz e Raquel Layane</strong> 
            </p>
    </footer>
</body>
</html>