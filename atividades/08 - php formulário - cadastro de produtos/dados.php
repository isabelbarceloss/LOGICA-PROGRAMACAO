<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dados</title>
</head>
<body>
    
    <header>
        <?php
            $nome = $_GET["nome"];
            echo "<h1>Dados Cadastrais do Produto: ", $nome;".</h1>";
        ?>
    </header>
    
    <main class="dados">

        <?php
            $id = $_GET["id"];
            $nome = $_GET["nome"];
            $preco = $_GET["preco"];
            $quantidade = $_GET["quantidade"];

            // classificando o produto (estrutura de decisão)
            if ($preco > 100) {
                echo "<br><p>Classificação: Produto caro.</p><br><br>";
            } else {
                echo "<br><p>Classificação: Produto acessível.</p><br><br>";
            }

            // mostrando o resultado
            echo "<h4>ID: </h4>", $id;
            echo "<h4>Preço Unitário: </h4>", $preco;
            echo "<h4>Quantidade: </h4>", $quantidade;
        ?>
        <br><br><br>
        <a class="link" href="index.php">VOLTAR Á PÁGINA INICIAL</a>
    </main>
</body>
</html>