<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lista de Produtos</title>
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
        <br>
        <h3>Lista de Produtos</h3>
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Ações
                </th>
            </tr>
            <?php
            $sql = "SELECT  IDCategoria,
                                Nome
                        FROM TBCategoria 
                        ORDER BY IDCategoria";
            require_once "conexao.php";
            $result = $conn->query($sql);
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $linha) {
                echo "<tr><td>" . $linha["IDCategoria"] . "</td><td>" . $linha["Nome"] . "</td>" .
                    "<td><a href='editarcategoria1.php?IDCategoria=" . $linha["IDCategoria"]
                    . "'>EDITAR</a><a href='excluircategoria.php?IDCategoria=" . $linha["IDCategoria"] . "'>DELETAR</a></td>" .
                    "</tr>";
            }
            ?>
        </table>
        <br>
        <div class="row">
            <a href="cadcategoria.php">NOVA CATEGORIA</a><br><br>
        </div>
        <div class="row">
            <a href="home.php">HOME</a><br>
        </div>
    </div>
</body>

</html>