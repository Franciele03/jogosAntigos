</main>
<footer>
    <p>&copy; 2025 Jogos Antigos</p>
</footer>

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
<script>
  document.addEventListener("mousemove", function(e) {
    const power = document.createElement("div");
    power.classList.add("power-cursor");
    power.style.left = e.clientX + "px";
    power.style.top = e.clientY + "px";
    document.body.appendChild(power);
    setTimeout(() => {
      power.remove();
    }, 400); // tempo um pouco maior para destacar mais
  });
</script>


</body>

</html>