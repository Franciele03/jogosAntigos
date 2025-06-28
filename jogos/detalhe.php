<?php include 'conexao.php'; ?>
<?php include 'cabecalho.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM jogos_antigos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="detalhe">
    <h1><?php echo $row['nome']; ?></h1>
    <img src="<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome']; ?>" />
    <p><strong>Categoria:</strong> <?php echo $row['categoria']; ?></p>
    <p><strong>Ano:</strong> <?php echo $row['ano']; ?></p>
    <p><strong>Plataforma:</strong> <?php echo $row['plataforma']; ?></p>
    <p><strong>Nível de dificuldade:</strong> <?php echo $row['nivel_dificuldade']; ?></p>
    <p><strong>Avaliação:</strong> <?php echo $row['avaliacao']; ?></p>
    <p><strong>Descrição:</strong> <?php echo $row['descricao']; ?></p>
    <a href="<?php echo $row['link']; ?>" target="_blank">Link do Jogo</a>
</div>

<?php include 'rodape.php'; ?>