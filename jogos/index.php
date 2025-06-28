<?php include 'conexao.php'; ?>
<?php include 'cabecalho.php'; ?>

<style>
  .power-cursor {
    position: fixed;
    pointer-events: none;
    width: 10px;
    height: 10px;
    background: radial-gradient(circle, #ff00ff, transparent);
    border-radius: 50%;
    box-shadow: 0 0 15px #ff00ff;
    opacity: 0.6;
    animation: pulse 0.3s ease-out;
    z-index: 9999;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
      opacity: 0.6;
    }
    100% {
      transform: scale(2);
      opacity: 0;
    }
  }

  .card {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .card img {
    max-width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 5px 5px 0 0;
  }

  h1 {
    text-align: center;
    margin: 30px 0;
  }
</style>

<h1>🎮 Jogos Antigos</h1>

<div class="container">
<?php
$sql = "SELECT * FROM jogos_antigos";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo "<img src='{$row['imagem']}' alt='{$row['nome']}' />";
    echo "<h2>{$row['nome']}</h2>";
    echo "<p>{$row['descricao']}</p>";
    echo "<a href='detalhe.php?id={$row['id']}'>Ver detalhes</a>";
    echo "</div>";
}
?>
</div>
    
    
  </div>
</div>

<script>
  document.addEventListener("mousemove", function(e) {
    const power = document.createElement("div");
    power.classList.add("power-cursor");
    power.style.left = e.pageX + "px";
    power.style.top = e.pageY + "px";
    document.body.appendChild(power);
    setTimeout(() => {
      power.remove();
    }, 300);
  });
</script>

<?php include 'rodape.php'; ?>

<!-- 
<script>
  document.addEventListener("mousemove", function(e) {
    const power = document.createElement("div"); // Cria o elemento visual do rastro
    power.classList.add("power-cursor");         // Aplica o estilo visual (cor, animação, etc.)
    power.style.left = e.pageX + "px";           // Define a posição horizontal do rastro
    power.style.top = e.pageY + "px";            // Define a posição vertical do rastro
    document.body.appendChild(power);            // Insere o rastro na página
    setTimeout(() => {
      power.remove();                            // Remove após 300ms para não sobrecarregar
    }, 300);
  });
</script>

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


