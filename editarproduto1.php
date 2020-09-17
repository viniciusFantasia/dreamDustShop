<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream Dust - Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <img id="logo" src="imagens/dreamdust.png" alt="" />
        <?php
        if (isset($_GET['IDProduto'])) {
            $IDProduto = $_GET['IDProduto'];
            $sql = "SELECT IDProduto,
                               Nome,
                               Descricao,
                               Preco,
                               IDCategoria 
                        FROM TBProduto p
                        WHERE IDProduto=$IDProduto";
            require_once "conexao.php";
            $result = $conn->query($sql);
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $linha) { 
                ?>
                <form name="form1" action="editarproduto2.php" method="POST" class="textocentralizado">
                    <!-- <label>Id: </label><?php echo $linha['IDProduto']; ?> <br> -->
                    <input type="hidden" name="IDProduto" value="<?php echo $linha['IDProduto']; ?>">
                    <label>Nome</label>
                    <input type="text" name="Nome" value="<?php echo $linha['Nome']; ?>" placeholder="Digite o Nome do Produto" required><br><br>
                    <label>Descrição</label>
                    <input type="text" name="Descricao" value="<?php echo $linha['Descricao']; ?>" placeholder="Digite a Descrição" required><br><br>
                    <label>Preço</label>
                    <input type="text" name="Preco" value="<?php echo $linha['Preco']; ?>" placeholder="Digite o Valor" required><br><br>
                    <label>Categoria</label><br>
                    <select name="categoria">
                    <?php
                    $sql2 = "SELECT IDCategoria,
                                    Nome
                            FROM TBCategoria";
                    require_once "conexao.php";
                    $result2 = $conn->query($sql2);
                    $select = $result2->fetchAll(PDO::FETCH_ASSOC);
                    foreach($select as $row):?>
                        <option value="<?php echo $row['IDCategoria']; ?>"<?php if($row['IDCategoria'] == $linha['IDCategoria']) echo 'selected="selected"'; ?>><?php echo $row['Nome']; ?></option>
                    <?php endforeach;?>
                    </select>
                    <br><br>
                    <input type="submit" value="SALVAR">
                    <input type="reset" value="CANCELAR">
                </form>
        <?php
            }
        }
        ?>
        <br>
        <a href="cadproduto.php">VOLTAR</a><br><br>
        <a href="home.php">HOME</a><br>
    </div>
</body>

</html>