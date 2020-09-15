<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
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
        <h3>Dados da Categoria Atualizados</h3>
        <?php
        if (
            isset($_POST['IDCategoria']) && isset($_POST['Nome'])
        ) {
            $IDCategoria = $_POST['IDCategoria'];
            $Nome = $_POST['Nome'];

            //montar a instrução SQL
            $sql = "update TBCategoria set 
                        Nome = '$Nome'
                        where IDCategoria='$IDCategoria'";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Salvo com sucesso</p>";
        } else {
            echo "<p> Erro aos receber os dados<p>";
        }
        ?>
        <br>
        <a href="cadcategoria.php">Voltar</a><br>
    </div>
</body>

</html>