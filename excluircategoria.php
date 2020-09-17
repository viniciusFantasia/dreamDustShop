<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Excluir Categoria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</head>

<body class="textocentralizado">
    <div id="fundo-externo">
        <div id="fundo">
            <img src="" alt="" />
        </div>
    </div>
    <div id="site">
        <img id="logo" src="imagens/dreamdust.png" alt="" />
        <?php
        if (isset($_GET['IDCategoria'])) {
            $IDCategoria = $_GET['IDCategoria'];

            //montar a instrução SQL
            $sql = "delete from TBCategoria where IDCategoria=$IDCategoria";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Exclusão relizada com sucesso!</p>";
        } else {
            echo "<p>Erro aos receber os dados!<p>";
        }
        ?>
        <br>
        <a href="listarcategoria.php">VOLTAR</a><br><br>
        <a href="home.php">HOME</a><br>
    </div>
</body>

</html>