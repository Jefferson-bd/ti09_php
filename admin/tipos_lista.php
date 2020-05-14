<?php 
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Selecionar os dados
$consulta = "SELECT * FROM tbtipos ORDER BY rotulo_tipo ASC";
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
        <title>Tipos - Lista</title>
        <meta charset="utf-8">
        <!-- Depois vamos inserir aqui o Bootstrap -->
    </head>
    <body>
        <main>
            <h1>Lista de Tipos</h1>
            <table border="1">
                <!-- thead>tr>th*4 -->
                <thead> <!-- cabeçalho da tabela -->
                    <tr>
                        <th>ID</th>
                        <th>SIGLA</th>
                        <th>ROTULO</th>
                        <th>ADICIONAR</th>
                    </tr>
                </thead>
                <!-- tbody>tr>td*4 -->
                <tbody> <!-- corpo da tabela -->
                   <!-- Abre a estrutura de repetição  -->
                   <?php do {?>
                    <tr>
                       <!-- Insira os dados determinando a linha e o campo -->
                        <td><?php echo $row['id_tipo']; ?></td>
                        <td><?php echo $row['sigla_tipo']; ?></td>
                        <td><?php echo $row['rotulo_tipo']; ?></td>
                        <td>ALTERAR|EXCLUIR</td>
                    </tr>
                     <?php } while ($row = $lista->fetch_assoc()); ?>
                     <!-- Fecha a estrutura de repetição -->
                </tbody>
            </table>
        </main>
    </body>
</html>
<?php //Limpar o cache dos dados
    mysqli_free_result($lista); 
?>