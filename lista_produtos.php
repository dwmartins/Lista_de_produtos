<?php
include('conexao.php');

$sql_produtos = "SELECT * FROM produtos";
$query_produtos = $mysqli->query($sql_produtos) or die($mysqli->error);
$num_produtos = $query_produtos->num_rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>

    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/b019fa643e.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="lista-produtos">
        <div class="menu">
            <!-- Menu -->
            <a href="lista_produtos.php"><i class="fa-solid fa-list-ol "></i> Lista de produtos </a>
            <a href="cadastro_produtos.php"><i class="fa-solid fa-file-circle-plus"></i>Cadastrar produto </a>
            <a href="editar_produto.php"><i class="fa-solid fa-file-pen "></i> Editar produto </a>
            <a href="deletar_produto.php"><i class="fa-solid fa-trash-can"></i> Deletar produto </a>

            <div class="open_menu">
                <i class="fa-solid fa-angles-right btn-open-menu"></i>
            </div>
        </div>

        <div>
            <h1>Produtos cadastrados no sistema:</h1>

            <a href="cadastro_produtos.php">Cadastrar novo </a>
        </div>

        <div class="tabela">

            <table>
                <thead>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>QUANTIDADE</th>
                    <th>DATA DE CADASTRO</th>
                    <th>AÇÕES</th>
                </thead>

                <tbody>

                    <?php
                    if ($num_produtos == 0) { ?>
                        <tr>
                            <td>Nenhum produto cadastrado!</td>
                        </tr>
                    <?php
                    } else {
                        
                        while ($produtos = $query_produtos->fetch_assoc()) {
                        
                        $data_cadastro = date("d/m/y H:i", strtotime($produtos['data']));

                    
                    ?> 
                    <tr>
                        <td><?php echo $produtos['id']?></td>
                        <td><?php echo $produtos['produto'] ?></td>
                        <td><?php echo $produtos['quantidade'] ?></td>
                        <td><?php echo $data_cadastro?></td>
                        <td>deletar</td>
                    </tr>
                        
                    <?php 
                        }
                    }
                    ?>


                </tbody>
            </table>

        </div>

    </section>

    <script src="./js/menu.js"></script>
    <script src="./js/form.js"></script>
</body>

</html>