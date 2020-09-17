<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream Dust Shop - Categoria</title>
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
            <br>
            <h2>Nova Categoria</h2><br>
            <br>
            <form class="form-group" name="form1" action="inserircategoria.php" method="POST">
                <label>Nome</label><br>
                <input type="text" name="Nome" value="" placeholder="Nome da Categoria" required><br><br><br>
                <br><br>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Cancelar">
                <br>
                <br>
            </form>
        <br>
        <a href="home.php">HOME</a><br>
    </div>
</body>

</html>