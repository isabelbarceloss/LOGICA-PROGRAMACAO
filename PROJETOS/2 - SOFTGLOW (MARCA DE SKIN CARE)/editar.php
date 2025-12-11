<?php
    require_once('conexao.php');

    $bancoDados = new db();
    $link = $bancoDados->conecta_mysql();

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $sql = "SELECT * FROM produtos WHERE id = $id";
        $resultado = mysqli_query($link, $sql);

        if (mysqli_num_rows($resultado) == 1) {
            $dados = mysqli_fetch_assoc($resultado);
        } else {
            echo "Produto não encontrado.";
            exit;
        }
    } else {
        echo "ID não informado.";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $novoNome = $_POST['nome'];
        $novaCategoria = $_POST['categoria'];
        $novoPreco = $_POST['preco'];
        $novaQuantidade = $_POST['quantidade'];
        $novaDescricao = $_POST['descricao'];

        $sqlUpdate = "UPDATE produtos SET
                        nome = '$novoNome',
                        categoria = '$novaCategoria',
                        preco = '$novoPreco',
                        quantidade = '$novaQuantidade',
                        descricao = '$novaDescricao'
                       WHERE id = $id";
        if (mysqli_query($link, $sqlUpdate)) {
            header("Location: dados.php");
            exit;
        } else {
            echo "Erro ao atualizar";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo e favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Produto</title>
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

    <main>
        <h2 class="titulo">Atualizar Produto</h2>
        <div class="form-container">
            <form action="" method="post">

                <label>Nome*</label>
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome do Produto" value="<?php echo $dados['nome']; ?>" required>
                <br><br>
                <label>Categoria*</label>
                <br>
                <input type="text" name="categoria" id="categoria" placeholder="Ex: Limpeza, Hidratação, Proteção Solar, Tratamento, etc" value="<?php echo $dados['categoria']; ?>" required>
                <br><br>
                <label>Preço*</label>
                <br>
                <input type="number" step="0.01" name="preco" id="preco" placeholder="Preço Unitário do Produto (Ex: 35.00)" value="<?php echo $dados['preco']; ?>" required>
                <br><br>
                <label>Quantidade*</label>
                <br>
                <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade de Produtos" value="<?php echo $dados['quantidade']; ?>" required>
                <br><br>                
                <label>Descrição (opcional)</label>
                <br>
                <textarea name="descricao" placeholder="Descrição do Produto" value="<?php echo $dados['descricao']; ?>"></textarea>
                <br><br>
                <button type="submit">Atualizar</button>
                <br><br>
                <div class="link">
                    <a href="dados.php" class="botao">Cancelar</a>
                </div>
            </form>
        </div>
        <br>
        <footer>
            <p>
                <strong>Entre em Contato com a Gente!</strong>
                <br><strong>Email:</strong> softglow@softglow.com
                <br><strong>Telefone:</strong> (12) 12345-6789
                <br><br><strong>Desenvolvedores: Isabel Barcelos, Isabela Pereira, João Diniz e Raquel Layane</strong> 
            </p>
        </footer>
    </main>
</body>
</html>