<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Categoria</title>
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
        <img id="logo" src="" alt="" />
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
        <a href="cadcategoria.php">Voltar</a><br><br>
        <a href="home.php">Home</a><br>
    </div>
</body>

</html>