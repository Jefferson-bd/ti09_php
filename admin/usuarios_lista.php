<?php 
include("../Connections/conn_produtos.php");
$consulta = "SELECT * FROM tbusuarios ORDER BY login_usuario ASC";
$lista = $conn_produtos->query($consulta);
$row = $lista->fetch_assoc();
$totalRows = ($lista)->num_rows;
?>

<!-- Estrutura HTML -->
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Usuários - Lista</title>
        <meta charset="utf-8">
        <!-- Depois vamos inserir aqui o Bootstrap -->
    </head>
    <body>
        <main>
            <h1>Lista de Usuários</h1>
            <table border="1">
                <!-- thead>tr>th*5 -->
                <thead> <!-- cabeçalho da tabela -->
                    <tr>
                        <th>ID</th>
                        <th>LOGIN</th>
                        <th>SENHA</th>
                        <th>NIVEL</th>
                        <th>ADICIONAR</th>
                    </tr>
                </thead>
                <!-- tbody>tr>td*5 -->
                <tbody> <!-- corpo da tabela -->
                <!-- Abre a estrutura de repetição -->
                    <?php do {?>
                        <tr>
                            <td><?php echo $row['id_usuario'];?></td>
                            <td><?php echo $row['login_usuario'];?></td>
                            <td><?php echo $row['senha_usuario'];?></td>
                            <td><?php echo $row['nivel_usuario'];?></td>
                            <td>ALTERAR|EXCLUIR</td>
                        </tr>
                    <?php } while ($row = $lista->fetch_assoc()); ?>
                <!-- Fecha estrutura de repetição -->
                </tbody>
            </table>
        </main>
    </body>
</html>
<?php //Limpar o cache dos dados
    mysqli_free_result($lista); 
?>