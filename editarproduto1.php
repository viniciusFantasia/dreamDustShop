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
            if (isset($_GET['IDProduto'])) {
                $IDProduto = $_GET['IDProduto'];
                $sql = "Select * from TBProduto where IDProduto=$IDProduto";
                require_once "conexao.php";
                $result = $conn->query($sql);
                $dados = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dados as $linha) { ?>
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
                        <select name="IDCategoria" id="categoria">
                            <option value=""></option>
                        </select>
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