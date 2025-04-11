<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafeteria Delícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="/style.css" rel="stylesheet" >
</head>
<body>
    <header class="bg-dark text-white py-4 px-4 position-relative text-center">
        <a href="#" class="text-white position-absolute top-50 start-0 translate-middle-y ms-3">
            <i class="bi bi-house-door-fill fs-3"></i>
        </a>
        <h1 class="m-0">Cardápio Cafeteria Delícia</h1>
        <a href="/cafeteria-dlc/carrinho.html" class="text-white position-absolute top-50 end-0 translate-middle-y me-3">
            <i class="bi bi-cart4 fs-3"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
                <span class="visually-hidden">itens no carrinho</span>
            </span>
        </a>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2>Bem-vindo à Cafeteria Delícia!</h2>
            <p>O lugar perfeito para os amantes de um bom café. Experimente nossos grãos selecionados e sobremesas irresistíveis.</p>
            <div id="carouselExampleIndicators" class="carousel slide my-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/cafeteria-dlc/imagens/coffee1.jfif" class="d-block w-100" alt="Café delicioso">
                    </div>
                    <div class="carousel-item">
                        <img src="/cafeteria-dlc/imagens/adobestock-229640991.avif" class="d-block w-100" alt="Grãos de café">
                    </div>
                    <div class="carousel-item">
                        <img src="/cafeteria-dlc/imagens/cafe-imagem-artigo.jpg" class="d-block w-100" alt="Café com leite">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
            <a href="/cafeteria-dlc/cardapio.php" class="btn btn-custom btn-lg bg-dark text-white">Ver Cardápio</a>
        </div>
    </section>
    
    <footer class="bg-dark text-white text-center py-5">
        <p>&copy; 2025 Cafeteria Delícia. Todos os direitos reservados.</p>
        <p><a href="#" class="text-white">Política de Privacidade</a> | <a href="#" class="text-white">Contato</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
