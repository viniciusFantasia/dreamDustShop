<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Dust Shop - Categoria</title>
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
            <br>
            <h2>Nova Categoria</h2><br>
            <br>
            <form name="form1" action="inserircategoria.php" method="POST">
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