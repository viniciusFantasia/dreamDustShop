<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Dust - Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="textocentralizado">
    <div id="fundo-externo2">
        <div id="fundo2">
            <img src="" alt="" />
        </div>
    </div>
    <div id="site">
        <img id="logo" src="" alt="" />
        <?php
        if (isset($_GET['IDProtudo'])) {
            session_start();
            $IDProtudo = $_GET['IDProtudo'];

            //montar a instrução SQL
            $sql = "delete from TBProduto where IDProtudo=$IDProtudo";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Excluido com sucesso</p>";
            session_destroy();
        } else {
            echo "<p> Erro aos receber os dados!!! <p>";
        }
        ?>
        <br>
        <a href="cadproduto.php">VOLTAR</a><br><br>
        <a href="home.php">HOME</a><br>
    </div>
</body>

</html>