<?php
    // inclusão do arquivo com a conexão com o banco de dados
    require_once('conexao.php');

    // new db() - classe db, para conectar o banco
    $bancoDados = new db();
    $link = $bancoDados -> conecta_mysql(); // link de conexão com o mysql

    // consulta sql para buscar os dados
    $sql = "SELECT id, nome, categoria, preco, quantidade, descricao, editar, excluir FROM produtos";
    $resultado = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo e favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos Cadastrados</title>
</head>
<body>
    <!-- Integrantes do Grupo:
     Isabel Barcelos Agualuza 11251101322
     Isabela Pereira de Brito 11251100580
     João de Lima Vernosi Diniz 11251102193
     Raquel Layane Silva 11251101679 -->
    
    <!-- cabeçalho -->
    <header>
        <nav class="menu">
            <a href="index.php">Página Inicial</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="dados.php">Dados Cadastrados</a>
        </nav>
        <figure class="logo-container">
            <img class="logo" src="img/logo e favicon/logo softglow.png" alt="Logo SoftGlow">
        </figure>
    </header>

    <main class="conteudo">
        <h2 class="titulo">Produtos Cadastrados</h2>

        <?php if (mysqli_num_rows($resultado) > 0): ?>
        <table class="tabela-produtos">
            <tr class="tabela-cabecalho">
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>

            <?php while($linha = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['categoria']; ?></td>
                <td><?php echo $linha['preco'];?></td>
                <td><?php echo $linha['quantidade'];?></td>
                <td><?php echo $linha['descricao'];?></td>
                <td>
                    <a class="botao-acao editar" href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a>
                    <a class="botao-acao excluir" href="excluir.php?id=<?php echo $linha['id']; ?>" onclick="return confirm ('Tem certeza que deseja excluir este usuário?');">Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <br><br>
        <?php else: ?>
            <p class="sobre">Nenhum produto cadastrado.</p>
        <?php endif; ?>

        <div class="link">
            <a class="botao" href="cadastro.php">VOLTAR</a>
        </div>
    </main>
    <br>
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