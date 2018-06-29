<?php include("header.php"); 
include("conecta.php"); 
include("banco-produto.php");




$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '251603aa', 'loja');

if(insereProdutos($conexao, $nome, $preco)) { ?>
    <p class="alert-success">Produto <?php echo $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!</p>
<?php } else{ ?>
    <p class="alert-danger">Produto <?php echo $nome; ?> nao  foi adicionado!</p>
<?php
} 
?>

<?php include("footer.php"); 