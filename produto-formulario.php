<?php include("header.php"); ?>
<h1>Formulario Produtos</h1>

<form action="adiciona-produto.php"> 
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Preco</td>
            <td><input class="form-control" type="number" name="preco"></td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="cadastrar"></td>
        </tr>
    </table>
</form>

    <?php include("footer.php"); ?>