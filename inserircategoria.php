<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Categoria</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="textocentralizado">
    <div id="fundo-externo">
        <div id="fundo">
            <img src="" alt="" />
        </div>
    </div>
    <div id="site">
        <img id="logo" src="" alt="" />
        <h3>Nova Categoria</h3>
        <?php
        if (
            isset($_POST['NOME'])
        ) {
            $Nome = $_POST['Nome'];

            //montar a instrução SQL
            $sql = "insert into TBCategoria (Nome) 
                                values('$Nome')";
            //  echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Categoria inserida com sucesso!!</p>";
        } else {
            echo "<p> Erro aos receber os dados! <p>";
        }
        ?>
        <br>
        <a href="cadcategoria.php">VOLTAR</a><br><br><br>
        <a href="home.php">HOME</a><br><br>
    </div>
</body>

</html>