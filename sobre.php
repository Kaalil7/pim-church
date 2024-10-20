<?php

date_default_timezone_set('America/Sao_Paulo');
// A partir daqui, o usuário está autenticado

/// Nome do arquivo de log
$logFile = 'database/access_log.txt';

// Obtendo o IP do usuário
$userIp = $_SERVER['REMOTE_ADDR'];

// Obtendo a data e hora atual
$dateTime = date('Y-m-d H:i:s');

// Registrando o acesso no arquivo de log
$logEntry = "$dateTime - IP: $userIp\n";
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Contagem de acessos
$accessCount = count(file($logFile)); // Conta o número de linhas no log
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - IPI Vila Yara</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/logo-icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/logo.png" alt="Logo da Igreja" class="logo-navbar">
                <div class="ml-2 text-navbar">
                    <span>Igreja Presbiteriana</span><br>
                    <span>Independente do Brasil</span><br>
                    <span>Vila Yara</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/access.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos.php">Eventos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header de Eventos -->
    <header class="fullscreen-image" style="background-image: url('css/fundo.jpg');">
        <div class="overlay"></div>
        <div class="content-center">
            <div class="text-box">
                <h1 class="text-white">Sobre Nós</h1>
                <p class="text-white lead">Conheça nossa história e missão</p>
            </div>
        </div>
    </header>

    <!-- Seção de Introdução -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Quem Somos</h2>
            <p>A Igreja Presbiteriana Independente do Brasil é uma comunidade acolhedora, dedicada a servir a Deus e ao próximo. Nossa missão é promover a fé em Cristo e construir um ambiente de amor, esperança e solidariedade.</p>
        </div>
    </section>

    <!-- Seção Sobre -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h2>Nossa Missão</h2>
                    <p>Proclamar o evangelho de Jesus Cristo e fazer discípulos, promovendo a comunhão entre os membros e com a sociedade.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/biblia.jpg" class="img-fluid" alt="Nossa Missão">
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <h2>Nossa Visão</h2>
                    <p>Ser uma igreja relevante, onde cada membro encontra um espaço para crescer espiritualmente e contribuir para o bem-estar da comunidade.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="images/cr3.jpg" class="img-fluid" alt="Nossa Visão">
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h2>Nossos Valores</h2>
                    <p><strong>Fé:</strong> Acreditamos que a fé em Cristo é o fundamento de nossas vidas.</p>
                    <p><strong>Comunhão:</strong> Valorizamos a comunhão entre os membros e com a comunidade.</p>
                    <p><strong>Amor:</strong> Seguimos o mandamento de amar a Deus sobre todas as coisas e ao próximo como a nós mesmos.</p>
                    <p><strong>Serviço:</strong> Somos chamados para servir ao próximo e impactar positivamente a nossa sociedade.</p>
                    <p><strong>Integridade:</strong> Buscamos viver de acordo com os princípios bíblicos em todas as áreas de nossas vidas.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/bal2.jpg" class="img-fluid" alt="Nossos Valores">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de História -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Nossa História</h2>
            <p>A Igreja Presbiteriana Independente do Brasil foi fundada em 1903, e desde então tem sido um farol de esperança e fé para a comunidade. Com um compromisso firme com a Palavra de Deus, temos crescido e impactado a vida de muitas pessoas ao longo dos anos.</p>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-primary text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row my-4">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Sobre Nós</h5>
                <p>A Igreja Presbiteriana Independente do Brasil é uma comunidade acolhedora e dedicada a servir.</p>
                <p>Total de acessos: <strong><?php echo $accessCount; ?></strong></p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Contato</h5>
                <ul class="list-unstyled">
                    <li>
                        <p><i class="fas fa-map-marker-alt pe-2"></i>Rua Victor Brecheret, 132 - Vila Yara, Osasco - SP, 06026-000</p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone pe-2"></i>+55 (11) 3681-8460</p>
                    </li>
                </ul>
            </div>

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Siga-nos</h5>
                <ul class="list-unstyled d-flex flex-row justify-content-center">
                    <li>
                        <a class="text-white px-2" href="https://www.facebook.com/ipidevilayara/?locale=pt_BR">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white px-2" href="https://www.instagram.com/ipidevilayara/">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white ps-2" href="https://www.youtube.com/c/igrejapresbiterianaindependentedevilayara/videos">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Localização</h5>
                <div id="map" style="height: 150px; border-radius: 5px; overflow: hidden;"></div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        &copy; 2024 Igreja IPI Vila Yara. Todos os direitos reservados.
    </div>
    <!-- Copyright -->
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Mostrar o botão "Voltar ao Início" ao rolar a página
        window.onscroll = function() {
            var topButton = document.getElementById("backToTop");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                topButton.style.display = "block";
            } else {
                topButton.style.display = "none";
            }
        };
        // Inicializa o mapa
            var map = L.map('map').setView([-23.547723, -46.762845], 15); // Substitua pelas coordenadas corretas

            // Adiciona a camada de tile do OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            // Adiciona um marcador
            L.marker([-23.547723, -46.762845]).addTo(map) // Substitua pelas coordenadas corretas
                .bindPopup('IPI Vila Yara')
                .openPopup();
            // Centraliza o mapa no marcador
    </script>
</body>
</html>

