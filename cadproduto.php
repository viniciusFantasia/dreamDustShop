<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Dust Shop - Produto</title>
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
            <img id="logo" src="imagens/logo2.png" alt="" />
            <h3>Novo Produto</h3><br>
                <form name="form1" class="textocentralizado">
                    <label>Nome</label><br>
                    <input type="text" name="Nome" value="" placeholder="Digite nome do Produto" required disabled><br><br>
                    <label>Descrição</label><br>
                    <input type="text" name="Descricao" value="" placeholder="Digite a Descrição" required disabled><br><br>
                    <label>Preço</label><br>
                    <input type="text" name="Preco" value="" placeholder="Digite o valor do Protuto" required disabled><br><br>
                    <label>Categoria</label><br>
                        <select name="IDCategoria" id="categoria">
                            <option value=""></option>
                        </select>
                    <?php echo "<a href='editarproduto1.php?IDProduto=" . $linha["IDProduto"] ."'>EDITAR</a>
                    <a href='excluirproduto.php?IDProduto=" . $linha["IDProduto"] . "'>DELETAR</a>";?><br><br>
                </form><br><BR>
                </table>
                <img id="logo" src="" alt="" />
            </br>
            <a href="home.php">HOME</a><br>
</body>
</html>