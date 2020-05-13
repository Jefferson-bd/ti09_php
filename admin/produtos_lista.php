<?php 
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Selecionar os dados
$consulta = "SELECT * FROM tbprodutos ORDER BY descri_produto ASC";
// Fazer a lista completa dos dados
$lista = $conn_produtos->query($consulta);
// Separar dados em linhas(row)
$row = $lista->fetch_assoc();
// Contar total de linhas
$totalRows = ($lista)->num_rows;
?>






<!------------------------ Estrutura HTML ------------------------>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Produtos - Lista</title>
        <meta charset="utf-8">
        <!-- Depois vamos inserir aqui o Bootstrap -->
    </head>
    <body>
        <main>
            <h1>Lista de Produtos</h1>
            <table border="1">
                <!-- thead>tr>th*8 -->
                <thead> <!-- cabeçalho da tabela -->
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>DESTAQUE</th>
                        <th>DESCRIÇÃO</th>
                        <th>RESUMO</th>
                        <th>VALOR</th>
                        <th>IMAGEM</th>
                        <th>ADICIONAR</th>
                    </tr>
                </thead>
                <!-- tbody>tr>td*8 -->
                <tbody> <!-- corpo da tabela -->
                    <tr>
                       <!-- Insira os dados determinando a linha e o campo -->
                        <td><?php echo $row['id_produto']; ?></td>
                        <td><?php echo $row['id_tipo_produto']; ?></td>
                        <td><?php echo $row['destaque_produto']; ?></td>
                        <td><?php echo $row['descri_produto']; ?></td>
                        <td><?php echo $row['resumo_produto']; ?></td>
                        <td><?php echo $row['valor_produto']; ?></td>
                        <td><?php echo $row['imagem_produto']; ?></td>
                        <td>ALTERAR|EXCLUIR</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>