<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inserir Categoria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="textocentralizado">
    <div id="fundo-externo">
        <div id="fundo">
            <img src="" alt="" />
        </div>
    </div>
    <div id="site">
        <img id="logo" src="imagens/dreamdust.png" alt="" />
        <h3>Nova Categoria</h3>
        <?php
        if (
            isset($_POST['Nome'])
        ) {
            $Nome = $_POST['Nome'];

            //montar a instrução SQL
            $sql = "INSERT INTO TBCategoria (Nome) 
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