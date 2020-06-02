<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa</title>
    <!-- Link para arquivos Bootstrap CSS -->
    <!-- Código desabilitado para não dar conflito -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
</head>
<body>
    <nav class="nav navbar-inverse">
        <div class="container-fluid">
            <!-- Agrupamento para exibição MOBILE -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar" aria-expanded="false">
                    <span class="sr-only">Toogle  navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                    <img src="../imagens/logochurrascopequeno.png" alt="">
                </a>
            </div>
            
            
            <!-- nav direita -->
            <div class="collapse navbar-collapse" id="defaultNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">ADMIN</a></li>
                    <li><a href="produtos_lista.php">PRODUTOS</a></li>
                    <li><a href="tipos_lista.php">TIPOS</a></li>
                    <li><a href="usuarios_lista.php">USUÁRIOS</a></li>
                    <li class="active">
                        <a href="../index.php">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span class="glyphicon glyphicon-log-out"></span>
                        </a>
                    </li>
                </ul>
            </div><!-- Fechamento na direita -->
        </div><!-- Fechamento Container -->
    </nav>
    
    <!-- Link para arquivos Bootstrap Java Script -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>