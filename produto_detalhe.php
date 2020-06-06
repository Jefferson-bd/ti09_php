<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Consulta e filtro de dados
$campo_filtro       =   "id_produto";
$filtro_select      =   $_GET['id_produto'];
$consulta           =       "SELECT * 
                            FROM vw_tbprodutos 
                            WHERE ".$campo_filtro."='".$filtro_select."' 
                            ORDER BY descri_produto ASC";
$lista              =   $conn_produtos->query($consulta);
$row                =   $lista->fetch_assoc();
$totalRows          =   ($lista)->num_rows;
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Produtos - Geral</title>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="../css/meu_estilo.css">
</head>

<body class="container">
    <h2 class="breadcrumb alert-danger">
        <a href="javascript:window.history.go(-1)" class="btn btn-danger">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <strong><?php echo $row['descri_produto']; ?></strong>
    </h2>
    <div class="row">
        <!-- Manter os elementos na lista -->
        <!-- Abre a estrutura de repetição -->
        <?php do { ?>
        <!-- Abre thumbnail/card -->
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <!-- Diminsionamento -->
            <div class="thumbnail">
                <img src="imagens/<?php echo $row['imagem_produto']; ?>" alt="" class="img-responsive img-rounded">
            </div>
            <div class="caption text-right">
                <h3 class="text-danger">
                    <strong><?php echo $row['descri_produto']; ?></strong>
                </h3>
                <p class="text-warning">
                    <strong><?php echo $row['rotulo_tipo']; ?></strong>
                </p>
                <p class="text-left">
                    <?php echo $row['resumo_produto']; ?>
                </p>
                <p>
                    <button class="btn btn-default disabled" role="button">
                        <?php echo number_format($row['valor_produto'],2,',','.'); ?>
                    </button>
                </p>
            </div>
        </div>
        <!-- Fecha thumbnail/card -->
        <?php } while ($row=$lista->fetch_assoc()); ?>
        <!-- Fecha estrutura de repetição -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php  
    mysqli_free_result($lista); 
?>