<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo e favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Página Inicial</title>
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
        <h2 class="titulo">Sobre Nós</h2>
        
        <p class="sobre">A SoftGlow nasceu para transformar o cuidado com a pele em um momento leve, simples e prazeroso.
        <br>Trabalhamos com uma estética minimalista, tons suaves e produtos que entregam bem-estar sem complicação.
        Nossa essência combina delicadeza, <br>autenticidade e o brilho natural que existe em cada pessoa.</p>

        <h3 class="subtitulo-proposta">Proposta</h3>
        <p class="sobre">Nossa proposta é oferecer uma experiência de skincare acessível, suave e eficaz. Queremos que cada produto transmita conforto, <br> e um toque de elegância creamy, acompanhando você em todas as etapas da rotina de cuidados.</p>

        <h3 class="subtitulo-missao">Missão</h3>
        <p class="sobre">Promover uma rotina de beleza leve, consciente e acolhedora, criando produtos que ofereçam resultados reais com texturas delicadas e ingredientes que respeitam a pele.</p>

        <h3 class="subtitulo-visao">Visão</h3>
        <p class="sobre">A visão da SoftGlow é ser reconhecida como uma marca que une simplicidade, cuidado e elegância em cada detalhe. <br>Queremos nos tornar referência em beleza minimalista, oferecendo experiências que transmitam suavidade, confiança e bem-estar. <br>Buscamos inspirar pessoas a criarem uma relação mais leve e consciente com sua rotina de skincare, valorizando sempre o brilho natural que cada uma já possui.</p>

        <h3 class="subtitulo-valores">Valores</h3>
        <p class="sobre">Nossos valores refletem aquilo que acreditamos e colocamos em prática todos os dias. Valorizamos a suavidade, priorizando cuidados delicados e gentis com a pele. <br>A transparência é essencial para nós, pois prezamos por comunicação clara e verdadeira. Também acreditamos profundamente no bem-estar, criando produtos e experiências que tornam a rotina mais acolhedora. Acima de tudo, celebramos a beleza natural, apostando em uma estética que realça o que já é autêntico e próprio de cada pessoa. <br>Esses valores nos guiam para manter uma marca consistente, harmoniosa e fiel à sua essência.</p>
        <br><br>

        <!-- banner em movimento mostrando alguns produtos em looping (interação com javascript) -->
    <section class="carrossel-section">
        <h2 class="titulo">Produtos Destaque</h2>

        <div class="carrossel-container">
            <div class="carrossel" id="carrossel">

                <!-- lista com 5 produtos -->
                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/gel de limpeza facial.png">
                    <h3 class="produto1">Gel de Limpeza Facial</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/hidratante facial gel.png">
                    <h3 class="produto2">Hidratante Facial em Gel</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/protetor solar gel-creme.png">
                    <h3 class="produto3">Protetor Solar em Gel</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/tônico facial.png">
                    <h3 class="produto1">Tônico Facial</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/sérum de ácido hialurônico.jpeg">
                    <h3 class="produto5">Sérum de Ácido Hialurônico</h3>
                </div>

                <!-- cópia da lista para loopíng contínuo -->
                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/gel de limpeza facial.png">
                    <h3 class="produto1">Gel de Limpeza Facial</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/hidratante facial gel.png">
                    <h3 class="produto2">Hidratante Facial em Gel</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/protetor solar gel-creme.png">
                    <h3 class="produto3">Protetor Solar em Gel</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/tônico facial.png">
                    <h3 class="produto1">Tônico Facial</h3>
                </div>

                <div class="item">
                    <img src="img/categorias essenciais/imagens pro banner/sérum de ácido hialurônico.jpeg">
                    <h3 class="produto5">Sérum de Ácido Hialurônico</h3>
                </div>

            </div>
        </div>
    </section>

    <!-- javascript -->
    <script>
        const carrossel = document.getElementById('carrossel');
        let scrollAmount = 0;

        function deslizarAuto() {
            scrollAmount += 1;
            carrossel.scrollTo({
                left: scrollAmount,
                behavior: "smooth"
            });

            if (scrollAmount >= carrossel.scrollWidth - carrossel.clientWidth) {
                scrollAmount = 0;
            }
        }
        setInterval(deslizarAuto, 30);
    </script>

        <section class="grid-section">
            <h2 class="grid-title">Limpeza e Preparo da Pele</h2>

            <div class="product-grid">

                <!-- Água Micelar -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ limpeza/agua micelar.png" alt="Água Micelar">
                    <h3 class="limpeza">Água Micelar</h3>
                    <p class="sobre">Água micelar suave que limpa, demaquila e refresca sem ressecar. Mantém a pele purificada e macia. <br><br></p>
                    
                    <h3 class="limpeza">Benefícios: </h3>
                    <ul class="lista">
                        <li>Remove impurezas e maquiagem sem agressão;</li>
                        <li>Mantém o equilíbrio natural da pele;</li>
                        <li>Sensação imediata de frescor.</li>
                    </ul>
                </div>

                <!-- Hidratante Facial Creme -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ hidratação/hidratante facial creme.png" alt="Hidratante Facial Creme">
                    <h3 class="hidratacao">Hidratante Facial – Creme</h3>
                    <p class="sobre">Hidratante cremoso que nutre intensamente, deixando a pele luminosa e macia.<br><br></p>

                    <h3 class="hidratacao">Benefícios: </h3>
                    <ul class="lista">
                        <li>Hidratação profunda e prolongada;</li>
                        <li>Melhora textura e elasticidade;</li>
                        <li>Toque sedoso e confortável.</li>
                    </ul>
                </div>

                <!-- Sabonete Facial -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ limpeza/sabonete facial.png" alt="Sabonete Facial">
                    <h3 class="limpeza">Sabonete Facial</h3>
                    <p class="sobre">Sabonete cremoso que limpa profundamente sem repuxar, deixando a pele confortável.<br><br></p>

                    <h3 class="limpeza">Benefícios: </h3>
                    <ul class="lista">
                        <li>Limpeza profunda com suavidade;</li>
                        <li>Controla a oleosidade;</li>
                        <li>Mantém a hidratação natural.</li>
                    </ul>
                </div>

                <!-- Hidratante Oil-Free -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ hidratação/hidratante oil-free.png" alt="Hidratante Oil-Free">
                    <h3 class="hidratacao">Hidratante Oil-Free</h3>
                    <p class="sobre">Gel hidratante leve e oil-free que hidrata sem pesar, com rápida absorção e toque fresco. <br><br></p>

                    <h3 class="hidratacao">Benefícios: </h3>
                    <ul class="lista">
                        <li>Hidratação leve sem brilho;</li>
                        <li>Controle de oleosidade;</li>
                        <li>Textura gel não pegajosa.</li>
                    </ul>
                </div>

            </div>
        </section>
        <br>
        <section class="grid-section">
            <h2 class="grid-titulo">Tratamento e Proteção</h2>

            <div class="product-grid">

                <!-- Protetor solar FPS 50 -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ proteção solar/protetor solar facial FPS 50.jpeg" alt="Protetor solar FPS 50">
                    <h3 class="protetor-solar">Protetor Solar Facial FPS 50</h3>
                    <p class="sobre">Um protetor leve, que espalha fácil e deixa a pele protegida sem pesar ou esbranquiçar. Ideal para o uso diário, com toque confortável e acabamento natural.</p>

                    <h3 class="protetor-solar">Benefícios: </h3>
                    <ul class="lista">
                        <li>Alta proteção contra UVA/UVB;</li>
                        <li>Textura leve que não deixa a pele oleosa;</li>
                        <li>Ajuda a prevenir manchas e envelhecimento precoce.</li>
                    </ul>
                </div>

                <!-- Sérum antioxidante -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ tratamento - essenciais/sérum antioxidante.jpeg" alt="Sérum antioxidante">
                    <h3 class="tratamento">Sérum Antioxidante</h3>
                    <p class="sobre">Um sérum potente que combate os danos do dia a dia e devolve viço à pele. Fórmula antioxidante para deixar o rosto mais iluminado e uniforme.</p>

                    <h3 class="tratamento">Benefícios: </h3>
                    <ul class="lista">
                        <li>Neutraliza radicais livres e reduz agressões externas;</li>
                        <li>Melhora a luminosidade e o tom da pele;</li>
                        <li>Ajuda a prevenir linhas finas e sinais da idade.</li>
                    </ul>
                </div>

                <!-- Protetor solar sem fragrância -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ proteção solar/protetor solar sem fragrância.jpeg" alt="Protetor solar sem fragrância">
                    <h3 class="protetor-solar">Protetor Solar Sem Fragrância</h3>
                    <p class="sobre">Proteção confortável para peles sensíveis. Fórmula suave que não irrita e garante segurança ao longo do dia.</p>

                    <h3 class="protetor-solar">Benefícios: </h3>
                    <ul class="lista">
                        <li>Sem fragrância (ideal para pele sensível);</li>
                        <li>Proteção eficaz contra UVA/UVB;</li>
                        <li>Não arde os olhos e não deixa resíduo branco.</li>
                    </ul>
                </div>

                <!-- Sérum de niacinamida -->
                <div class="product-card">
                    <img src="img/categorias essenciais/✅ tratamento - essenciais/sérum de niacinamida.jpeg" alt="Sérum de niacinamida">
                    <h3 class="tratamento">Sérum de Niacinamida</h3>
                    <p class="sobre">Um sérum que uniformiza, controla a oleosidade e deixa a pele mais saudável. Textura leve, rápida absorção e efeito glow natural.</p>

                    <h3 class="tratamento">Benefícios: </h3>
                    <ul class="lista">
                        <li>Reduz manchas e uniformiza a pele;</li>
                        <li>Controla a oleosidade e diminui poros;</li>
                        <li>Fortalece a barreira da pele e hidrata suavemente.</li>
                    </ul>
                </div>

            </div>
        </section>

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