CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    imagem TEXT,
    preco DECIMAL(10,2) NOT NULL
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

INSERT INTO produtos (nome, descricao, imagem, preco) VALUES
('Café Expresso', 'Um clássico intenso e encorpado', '/cafeteria-delicia/imagens/cafe-espresso.jpg', 5.00),
('Capuccino', 'Café com leite vaporizado e canela', '/cafeteria-delicia/imagens/cappuccino.jpg', 8.00),
('Brownie de Chocolate', 'Crocante por fora e macio por dentro', '/cafeteria-delicia/imagens/brownie.jpg', 7.00),
('Pão de Queijo', 'Tradicional pão de queijo mineiro, quentinho e crocante.', '/cafeteria-delicia/imagens/pao-queijo.jpg', 4.50),
('Bolo de Cenoura com Chocolate', 'Fofinho e saboroso, coberto com calda de chocolate.', '/cafeteria-delicia/imagens/bolo-cenoura.jfif', 6.00),
('Chá Gelado', 'Refrescante, nos sabores pêssego ou limão.', '/cafeteria-delicia/imagens/cha-gelado.jpg', 5.50);

INSERT INTO pedidos (produto_id, quantidade) VALUES
(1, 2),
(2, 1),
(3, 3);
