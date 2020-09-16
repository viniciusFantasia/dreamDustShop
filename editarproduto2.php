<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Dust - Produto</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
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
        if (
            isset($_POST['IDProduto']) && isset($_POST['Nome']) && isset($_POST['Descricao'])
            && isset($_POST['Preco'])  && isset($_POST['IDCategoria'])
        ) {
            $IDProduto = $_POST['IDProduto'];
            $Nome = $_POST['Nome'];
            $Descricao = $_POST['Descricao'];
            $Preco = $_POST['Preco'];
            $IDCategoria = $_POST['IDCategoria'];

            //montar a instrução SQL
            $sql = "update TBProduto set 
                        Nome = '$Nome',
                        Descricao = '$Descricao',
                        Preco = '$Preco',
                        IDCategoria = '$IDCategoria'
                        where IDProduto='$IDProduto'";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Salvo com sucesso</p>";
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