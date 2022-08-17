<?php

if (count($_POST) > 0) {

    include('conexao.php');

    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    $sql_code = "INSERT INTO produtos (produto, quantidade, data)
        VALUES ('$produto', '$quantidade', NOW())";
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
            <a href="lista_produtos.php"><i class="fa-solid fa-list-ol "></i> Lista de produtos </a>
            <a href="cadastro_produtos.php"><i class="fa-solid fa-file-circle-plus"></i>Cadastrar produto </a>
            <a href="editar_produto.php"><i class="fa-solid fa-file-pen "></i> Editar produto </a>
            <a href="deletar_produto.php"><i class="fa-solid fa-trash-can"></i> Deletar produto </a>

            <div class="open_menu">
                <i class="fa-solid fa-angles-right btn-open-menu"></i>
            </div>
        </div>

        <div class="layout">

            <form action="" method="POST">

                <h1>Cadastrar produtos:</h1>

                <label>Produto:</label>
                <input type="text" name="produto" id="produto">

                <label>Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade">

                <div id="msgErro"></div>

                <button id="BtnSubmit" type="submit">Salvar</button>

            </form>

        </div>
    </section>

    
    <script src="./js/menu.js"></script>
    <script src="./js/form.js"></script>
</body>

</html>