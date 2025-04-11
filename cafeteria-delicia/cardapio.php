<?php
    include("connection.php");
    $query = "SELECT * FROM produtos";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafeteria Delícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="/style.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-4 px-4 position-relative text-center">
        <a href="/cafeteria-dlc/index.php" class="text-white position-absolute top-50 start-0 translate-middle-y ms-3">
            <i class="bi bi-house-door-fill fs-3"></i>
        </a>
        <h1 class="m-0">Cardápio Cafeteria Delícia</h1>
        <a href="/cafeteria-dlc/carrinho.php" class="text-white position-absolute top-50 end-0 translate-middle-y me-3">
            <i class="bi bi-cart4 fs-3"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
                <span class="visually-hidden">itens no carrinho</span>
            </span>
        </a>
    </header>

    <section class="menu py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src=<?php echo $row['imagem']; ?> class="card-img-top" alt="<?php echo $row['nome']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['nome']; ?></h5>
                                    <p class="card-text"><?php echo $row['descricao']; ?></p>
                                    <p class="text-primary fw-bold">R$<?php echo $row['preco']; ?></p>
                                    <button class="btn btn-custom btn-lg bg-dark text-white" onclick="abrirModal('<?php echo $row['nome']; ?>')">Adicionar ao carrinho</button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                ?>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-5">
        <p>&copy; 2025 Cafeteria Delícia. Todos os direitos reservados.</p>
        <p><a href="#" class="text-white">Política de Privacidade</a> | <a href="#" class="text-white">Contato</a></p>
    </footer>

    <div class="modal fade" id="modalQuantidade" tabindex="-1" aria-labelledby="modalQuantidadeLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalQuantidadeLabel">Selecionar Quantidade</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <p id="produtoSelecionado" class="fw-bold mb-3"></p>
            <label for="quantidade" class="form-label">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade" value="1" min="1">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="confirmarAdicao()">Adicionar</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function abrirModal(nomeProduto) {
        document.getElementById('produtoSelecionado').textContent = nomeProduto;
        document.getElementById('quantidade').value = 1;
        const modal = new bootstrap.Modal(document.getElementById('modalQuantidade'));
        modal.show();
      }

      function confirmarAdicao() {
        const produto = document.getElementById('produtoSelecionado').textContent;
        const quantidade = document.getElementById('quantidade').value;

        alert(`Adicionado: ${quantidade}x ${produto}`);

        const modal = bootstrap.Modal.getInstance(document.getElementById('modalQuantidade'));
        modal.hide();
      }
    </script>
</body>
</html>
