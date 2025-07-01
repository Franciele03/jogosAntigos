<?php include 'conexao.php'; ?>
<?php include 'cabecalho.php'; ?>


<?php

// Recupera o ID passado na URL (ex: detalhe.php?id=1)
$id = $_GET['id'];

// Consulta no banco de dados para buscar o jogo correspondente ao ID
$sql = "SELECT * FROM jogos_antigos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); // Transforma o resultado em um array associativo
?>

<!-- Importa o CSS do Bootstrap 5 para estilos prontos e responsividade -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Estilo CSS personalizado para o visual do card -->
<style>
  /* Estilo do cartão com sombra, cantos arredondados e leve elevação no hover */
  .game-card {
    background-color: #f9f9f9; /* Fundo suave */
    border-radius: 15px;       /* Bordas arredondadas */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Sombra leve */
    padding: 30px;
    transition: transform 0.3s, box-shadow 0.3s; /* Suaviza a animação no hover */
  }

  

  /* Estilização da imagem do jogo: altura máxima, borda arredondada */
  .game-image {
    max-height: 400px;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  /* Botão com cor personalizada e animação no hover */
  .btn-custom {
    background-color: #007bff; /* Azul Bootstrap padrão */
    border: none;
    transition: background-color 0.3s;
  }

  /* Cor mais escura no botão ao passar o mouse */
  .btn-custom:hover {
    background-color: #0056b3;
  }
</style>

<!-- Container central da página -->
<div class="container my-5">
  <div class="row justify-content-center">
    <!-- Card centralizado, com largura média (8 colunas) -->
    <div class="col-md-8 text-center game-card">
      
      <!-- Título do jogo -->
      <h1 class="mb-4"><?php echo $row['nome']; ?></h1>

      <!-- Imagem do jogo, vinda da URL salva no banco -->
      <img src="<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome']; ?>" class="img-fluid game-image">

      <!-- Informações do jogo, com destaque para o rótulo -->
      <p><strong>Categoria:</strong> <?php echo $row['categoria']; ?></p>
      <p><strong>Ano:</strong> <?php echo $row['ano']; ?></p>
      <p><strong>Plataforma:</strong> <?php echo $row['plataforma']; ?></p>
      <p><strong>Nível de dificuldade:</strong> <?php echo $row['nivel_dificuldade']; ?></p>
      <p><strong>Avaliação:</strong> <?php echo $row['avaliacao']; ?></p>
      <p><strong>Descrição:</strong> <?php echo $row['descricao']; ?></p>

      <!-- Link para o jogo, abrindo em nova aba -->
      <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-custom mt-3">🎮 Link do Jogo</a>
    </div>
  </div>
</div>

<audio controls autoplay loop>
  <source src="../musica/musica1.mp3" type="audio/mpeg">
  Seu navegador não suporta o elemento de áudio.
</audio>


<?php include 'rodape.php'; ?>