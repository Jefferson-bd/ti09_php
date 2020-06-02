<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Selecionar o banco de dados
mysqli_select_db($conn_produtos,$database_conn);
// Selecionar os dados
$consulta = "SELECT * FROM tbtipos ORDER BY rotulo_tipo ASC";
// Fazer a lista completa dos dados
$lista = $conn_produtos->query($consulta);
// Separar os dados em linhas(row)
$row = $lista->fetch_assoc();
// Contar o total de linhas
$totalRows = ($lista)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
<title>Tipos - Lista</title>
<meta charset="utf-8">
<!-- Link arquivos Bootstrap css -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/meu_estilo.css">
</head>

<body class="fundofixo">
<?php include "menu_adm.php"; ?>
<main class="container">
    <h1 class="breadcrumb alert-warning">Lista de Tipos</h1>
    <table class="table table-hover table-condensed tbopacidade">
       <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
        <!-- thead>tr>th*4 -->
        <thead><!-- cabeçalho da tabela -->
            <tr>
                <th class="hidden">ID</th><!-- cabeça da coluna -->
                <th>SIGLA</th>
                <th>RÓTULO</th>
                <th>
                    <a href="tipos_insere.php" target="_self" class="btn btn-success btn-block btn-xs" role="button">
                      <span class="hidden-xs">ADICIONAR <br></span>
                       <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                    </a>
                </th>
            </tr>
        </thead>
        <!-- tbody>tr>td*4 -->
        <tbody><!-- corpo da tabela -->
            <!-- Abre a estrutura de repetição -->
            <?php do { ?>
            <tr><!-- Linha da tabela -->
                <!-- Insira os dados determinando a linha e o campo -->
                <td class="hidden"><?php echo $row['id_tipo']; ?></td>
                <td><?php echo $row['sigla_tipo']; ?></td>
                <td><?php echo $row['rotulo_tipo']; ?></td>
                <td>
                    <a href="tipos_atualiza.php?id_tipo=<?php echo $row['id_tipo']; ?>" target="_self" class="btn btn-info btn-block btn-xs" role="button">
                        <span class="hidden-xs">ALTERAR <br></span>
                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>            
                    </a>
                    <button data-nome="<?php echo $row['rotulo_tipo']; ?>" data-id="<?php echo $row['id_tipo']; ?>" class="delete btn btn-danger btn-block btn-xs">
                        <span class="hidden-xs">EXCLUIR <br></span>
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <?php } while ($row = $lista->fetch_assoc()); ?>
            <!-- Fecha a estrutura de repetição -->
        </tbody>
        </div>
    </table>
 </main> 
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-danger">ATENÇÃO!</h4>
            </div>
            <div class="modal-body">
                Deseja mesmo EXCLUIR o item?
                <h4><span class="nome text-danger"></span></h4>
            </div>
            <div class="modal-footer">
                <a href="#" type="button" class="btn btn-danger delete-yes">Confirmar</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Script para o Modal -->
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome    = $(this).data('nome');
        var id      = $(this).data('id');
        $('span.nome').text(nome);
        $('a.delete-yes').attr('href','tipos_exclui.php?id_tipo='+id);
        $('#myModal').modal('show');
    });
</script>
</body>
</html>
<?php mysqli_free_result($lista); ?>