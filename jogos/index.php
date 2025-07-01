<?php include 'conexao.php'; ?>
<?php include 'cabecalho.php'; ?>

<audio controls autoplay loop>
  <source src="../musica/musica1.mp3" type="audio/mpeg">
  Seu navegador não suporta o elemento de áudio.
</audio>


<!-- 

  EFEITO DE RASTRO DO MOUSE (POWER CURSOR)
  --------------------------------------------------
  Este script cria um efeito visual ao mover o mouse pela tela.
  A cada movimento:
    - Cria-se uma <div> com classe 'power-cursor' (estilo definido via CSS)
    - Posiciona-se essa <div> exatamente na coordenada atual do mouse (e.pageX / e.pageY)
    - A <div> é adicionada ao <body>, aparecendo como um rastro visual
    - Após 300ms, ela é automaticamente removida para evitar acúmulo de elementos
  
  Resultado: um efeito animado que segue o mouse com brilho e desaparece logo após.
-->
<style>
  .power-cursor {
    position: fixed;
    pointer-events: none;
    width: 18px;
    height: 18px;
    background: radial-gradient(circle, #ff00ff, #00ffff, transparent);
    border-radius: 50%;
    box-shadow:
      0 0 10px #ff00ff,
      0 0 20px #00ffff,
      0 0 30px #ff00ff,
      0 0 40px #00ffff;
    opacity: 0.9;
    animation: pulse 0.4s ease-out;
    z-index: 9999;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
      opacity: 0.9;
    }
    100% {
      transform: scale(2.5);
      opacity: 0;
    }
  }


  .card {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: #f9f9f9; /* Fundo suave */
  border-radius: 15px;       /* Bordas arredondadas */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Sombra leve */
  padding: 30px;
  transition: transform 0.3s, box-shadow 0.3s; /* Suaviza a animação no hover */
  cursor: pointer; /* 🔹 Indica que é interativo */
}

.card:hover {
  transform: scale(1.05); /* 🔹 Efeito de pulsar no card inteiro */
}

  h1 {
    text-align: center;
    margin: 30px 0;
  }

  .btn-detalhes {
    background-color: rgb(53, 49, 53);
    color: white;
    padding: 10px 20px;
    text-align: center;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s ease;
  }

  .btn-detalhes:hover {
    background-color: #0056b3;
    color: white;
  }
</style>

<h1>🎮 Jogos Antigos</h1>

<div class="container">
<?php
// Consulta todos os jogos cadastrados no banco
$sql = "SELECT * FROM jogos_antigos";
$result = $conn->query($sql);

// Loop para exibir cada jogo como um card
while($row = $result->fetch_assoc()) {
    echo "<div class='card p-3 m-2' style='width: 18rem; display: inline-block; vertical-align: top;'>";
    echo "<img src='{$row['imagem']}' alt='{$row['nome']}' class='card-img-top' />";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>{$row['nome']}</h5>";
    echo "<p class='card-text'>{$row['descricao']}</p>";
    echo "<a href='detalhe.php?id={$row['id']}' class='btn btn-detalhes mt-3'>Ver detalhes</a>";
    echo "</div>";
    echo "</div>";
}



?>





<?php include 'rodape.php'; ?>



