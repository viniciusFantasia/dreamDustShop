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
                        Nome
                    </th>
                    <th>
                        Descrição
                    </th>
                    <th>
                        Preço
                    </th>
                    <th>
                        Categoria
                    </th>
                    <th>
                        Ações
                    </th>
                </tr>
                <?php
                $sql = "SELECT p.IDProduto IDProduto,
                                p.Nome Nome,
                                p.Descricao Descricao,
                                p.Preco Preco,
                                p.IDCategoria IDCategoria,
                                c.Nome Categoria
                        FROM TBProduto p
                        JOIN TBCategoria c
                        ON p.IDCategoria=c.IDCategoria
                        ORDER BY p.Nome";
                require_once "conexao.php";
                $result = $conn->query($sql);
                $dados = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dados as $linha) {
                    echo "<tr><td>" . $linha["IDProduto"] . "</td><td>" . $linha["Nome"] . "</td><td> " . $linha["Descricao"] . "</td>" .
                        "<td>" . $linha["Preco"] . "</td><td>" . $linha["Categoria"] . "</td>" .
                        "<td><a href='editarproduto1.php?IDProduto=" . $linha["IDProduto"] 
                        ."'>EDITAR</a><a href='excluirproduto.php?IDProduto=" . $linha["IDProduto"] . "'>DELETAR</a></td>".
                        "</tr>"; 
                }
                ?>
            </table>
        <br>
        <a href="home.php">HOME</a><br>
    </div>
</body>

</html>