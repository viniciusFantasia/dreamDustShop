<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream Dust - Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="textocentralizado">
    <div id="fundo-externo2">
        <div id="fundo2">
            <img src="" alt="" />
        </div>
    </div>
    <div id="site">
        <img id="logo" src="imagens/dreamdust.png" alt="" />
        <h3>Novo Produto</h3>
        <?php
        if (
            isset($_POST['Nome']) && isset($_POST['Descricao'])
            && isset($_POST['Preco'])  && isset($_POST['IDCategoria'])
        ) {
            $Nome = $_POST['Nome'];
            $Descricao = $_POST['Descricao'];
            $Preco = $_POST['Preco'];
            $IDCategoria = $_POST['IDCategoria'];

            //montar a instrução SQL
            $sql = "INSERT INTO TBProduto (Nome,Descricao,Preco,IDCategoria) 
         values('$Nome','$Descricao','$Preco','$IDCategoria')";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Produto Salvo com sucesso</p>";
        } else {
            echo "<p> ERRO AO RECEBER DADOS! <p>";
        }
        ?>
        <br>
        <a href="cadproduto.php">VOLTAR</a><br><br><br>
        <a href="home.php">HOME</a><br><br>
    </div>
</body>

</html>