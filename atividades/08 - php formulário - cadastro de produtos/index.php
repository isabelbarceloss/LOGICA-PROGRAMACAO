<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário</title>
</head>
<body>
    
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>
    
    <main>
        <br>
        <h2>Cadastre seu Produto aqui:</h2>

        <form action="dados.php" method="get">
            <br>
            <label for="id">ID:</label> <br><br>
            <input type="number" name="id" id="id" placeholder="ID do Produto">
            
            <br><br>

            <label for="nome">Nome:</label> <br><br>
            <input type="text" name="nome" id="nome" placeholder="Nome do Produto">

            <br><br>

            <label for="preco">Preço Unitário:</label> <br><br>
            <input type="text" name="preco" id="preco" placeholder="Preço do Produto">

            <br><br>

            <label for="quantidade">Quantidade:</label> <br><br>
            <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade de Produtos">

            <br><br><br>

            <input class="botao" type="submit" value="CADASTRAR">
        </form>
    </main>
</body>
</html>