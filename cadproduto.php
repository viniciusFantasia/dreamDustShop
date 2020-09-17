<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream Dust Shop - Produto</title>
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
        <h3>Novo Produto</h3><br>
        <form name="form1" class="textocentralizado" action="inserirproduto.php" method="POST">
            <label>Nome</label><br>
            <input type="text" name="Nome" value="" placeholder="Nome" required><br><br>
            <label>Descrição</label><br>
            <input type="text" name="Descricao" value="" placeholder="Descrição" required><br><br>
            <label>Preço</label><br>
            <input type="text" name="Preco" value="" placeholder="Valor" required><br><br>
            <label>Categoria</label><br>
            <select name="categoria">
            <option>Selecione uma categoria</option>
            <?php
            $sql = "Select * from TBCategoria";
            require_once "conexao.php";
            $result = $conn->query($sql);
            $select = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($select as $row){
                echo('<option value="'.$row['IDCategoria'].'">'.$row['Nome'].'</option>');
            }
            ?>
            </select>
            <br><br><br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Cancelar">
        </form><br><BR>
        </table>
        </br>
        <a href="home.php">HOME</a><br>
</body>

</html>