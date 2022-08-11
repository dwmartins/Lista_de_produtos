<?php

if (count($_POST) > 0) {

    include('conexao.php');

    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $sql_code = "INSERT INTO produtos (produto, quantidade, valor, data)
        VALUES ('$produto', '$quantidade', '$valor', NOW())";
    $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
    if ($deu_certo) {
        echo "produto cadastrado com sucesso!";
        unset($_POST); // aqui vai zerar a variável
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>

    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/b019fa643e.js" crossorigin="anonymous"></script>
</head>

<body>

    <section class="Cadastro_produtos">
        <div class="menu">
            <a href="lista_produtos.php">Lista de produtos <i class="fa-solid fa-list-ol lista"></i> </a>
            <a href="cadastro_produtos.php">Cadastrar produto <i class="fa-solid fa-circle-plus add"></i></a>
            <a href="editar_produto.php">Editar produto <i class="fa-solid fa-file-pen editar"></i></a>
            <a href="deletar_produto.php">Deletar produto <i class="fa-solid fa-delete-left deletar"></i></a>

            <div class="open_menu">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </div>
        </div>

        <div class="layout">
            <h1>Cadastrar produtos:</h1>

            <form action="" method="POST">
                <label>Produto:</label>
                <input type="text" name="produto" id="produto">

                <label>Quantidade:</label>
                <input type="text" name="quantidade" id="quantidade">

                <label>Valor:</label>
                <input type="text" name="valor" id="valor">

                <button type="submit">Salvar</button>

            </form>

        </div>
    </section>


    <script src="./js/menu.js"></script>
</body>

</html>