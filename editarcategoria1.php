<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Editar Categoria</title>
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
        <h3>Editar Categoria</h3>
        <?php
        $IDCategoria = $_GET['IDCategoria'];
        $sql = "Select * from TBCategoria where IDCategoria=$IDCategoria";
        require_once "conexao.php";
        $result = $conn->query($sql);
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $linha) { ?>
            <form name="form1" action="editarcategoria2.php" method="POST" class="textocentralizado">
                <br>
                <input type="hidden" name="Categoria" value="<?php echo $linha['IDCategoria']; ?>">
                <label>Nome</label>
                <input type="text" name="Nome" value="<?php echo $linha['Nome']; ?>" placeholder="Digite o nome da Categoria" required><br><br>
                <input type="submit" value="SALVAR">
                <input type="reset" value="CANCELAR">
            </form>
        <?php
        }
        ?>
        <br>
        <a href="home.php">HOME</a><br>
    </div>
</body>

</html>