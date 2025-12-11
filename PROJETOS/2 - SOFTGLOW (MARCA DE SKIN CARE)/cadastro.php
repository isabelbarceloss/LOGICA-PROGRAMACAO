<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo e favicon/favicon.png" type="image/x-icon">
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
        <nav class="menu">
            <a href="index.php">Página Inicial</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="dados.php">Dados Cadastrados</a>
        </nav>
        <figure class="logo-container">
            <img class="logo" src="img/logo e favicon/logo softglow.png" alt="Logo SoftGlow">
        </figure>
    </header>

    <main>
        <h2 class="titulo">Cadastro de Produtos</h2>
        <p class="sobre">
            Registre aqui os produtos utilizados ou vendidos no salão para manter o estoque sempre atualizado e organizado!!
            <br><br>
            Esta página permite o cadastro de novos produtos no sistema de controle de estoque.
            Ao preencher as informações solicitadas, o produto será adicionado <br>à base de dados e ficará disponível para consulta, edição e acompanhamento na página de listagem de produtos.
            <br><br>
            Manter o cadastro atualizado ajuda na organização, facilita a reposição de itens e melhora o gerenciamento financeiro do salão.
        </p>

        <h2 class="titulo-formulario">Instruções Rápidas:</h2>
        <ul class="list">
            <li>Preencha todos os campos obrigatórios marcados com (*);</li>
            <li>Use valores numéricos apenas nos campos de quantidade e preço;</li>
            <li>Utilize descrições claras para facilitar futuras buscas;</li>
            <li>Verifique as informações antes de enviar;</li>
            <li>Caso o produto não tenha categoria definida, escolha a opção mais próxima.</li>
        </ul>

        <h3 class="titulo">Formulário:</h3>

        <div class="form-container">
            <form action="validar.php" method="post">

                <label>Nome*</label>
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome do Produto" required>
                <br><br>
                <label>Categoria*</label>
                <br>
                <input type="text" name="categoria" id="categoria" placeholder="Ex: Limpeza, Hidratação, Proteção Solar, Tratamento, etc" required>
                <br><br>
                <label>Preço*</label>
                <br>
                <input type="number" step="0.01" name="preco" id="preco" placeholder="Preço Unitário do Produto (Ex: 35.00)" required>
                <br><br>
                <label>Quantidade*</label>
                <br>
                <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade de Produtos" required>
                <br><br>                
                <label>Descrição (opcional)</label>
                <br>
                <textarea name="descricao" placeholder="Descrição do Produto"></textarea>
                <br><br>
                <button type="submit">Cadastrar Produto</button>

            </form>
        </div>

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