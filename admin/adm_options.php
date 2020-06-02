<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Área Administrativa</title>
    <!-- Link para arquivos Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>

<body class="fundofixo">
    <main class="container">
        <h1 class="breadcrumb ">Área Administrativa</h1>
        <div class="row">
            <!-- Manter os elementos na linha -->
            <!-- ADM Produtos -->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail alert-danger">
                    <img src="../imagens/icone_produto.png" alt="">
                    <br>
                    <div class="alert-danger">
                        <!-- Botão Principal -->
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group">
                                <button class="btn btn-default disabled">
                                    Produtos
                                </button>
                            </div>
                        </div>
                        <!-- Fecha Botão Principal -->
                        <!-- Grupo de Botões -->
                        <div class="btn-group btn-group-justified" role="group">
                            <!-- Botão Lista -->
                            <div class="btn-group">
                                <a href="produtos_lista.php">
                                    <button class="btn btn-danger">
                                        Listar
                                    </button>
                                </a>
                            </div>
                            <!-- Fecha Botão Lista -->
                            <!-- Botão Inserir -->
                            <div class="btn-group">
                                <a href="produtos_insere.php">
                                    <button class="btn btn-danger">
                                        Inserir
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- Fecha Botão Inserir -->
                    </div>
                </div>
            </div>
            <!-- Fecha ADM Proddanger -->
            <!-- ADM Tipos -->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail alert-warning">
                    <img src="../imagens/icone_tipos.png" alt="">
                    <br>
                    <div class="alert-warning">
                        <!-- Botão Principal -->
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group">
                                <button class="btn btn-default disabled">
                                    Tipos
                                </button>
                            </div>
                        </div>
                        <!-- Fecha Botão Principal -->
                        <!-- Grupo de Botões -->
                        <div class="btn-group btn-group-justified" role="group">
                            <!-- Botão Lista -->
                            <div class="btn-group">
                                <a href="tipos_lista.php">
                                    <button class="btn btn-warning">
                                        Listar
                                    </button>
                                </a>
                            </div>
                            <!-- Fecha Botão Lista -->
                            <!-- Botão Inserir -->
                            <div class="btn-group">
                                <a href="tipos_insere.php">
                                    <button class="btn btn-warning">
                                        Inserir
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- Fecha Botão Inserir -->
                    </div>
                </div>
            </div>
            <!-- Fecha ADM Tipos -->
            <!-- ADM Usuários -->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail alert-info">
                    <img src="../imagens/icone_user.png" alt="">
                    <br>
                    <div class="alert-info">
                        <!-- Botão Principal -->
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group">
                                <button class="btn btn-default disabled">
                                    Usuários
                                </button>
                            </div>
                        </div>
                        <!-- Fecha Botão Principal -->
                        <!-- Grupo de Botões -->
                        <div class="btn-group btn-group-justified" role="group">
                            <!-- Botão Lista -->
                            <div class="btn-group">
                                <a href="usuarios_lista.php">
                                    <button class="btn btn-info">
                                        Listar
                                    </button>
                                </a>
                            </div>
                            <!-- Fecha Botão Lista -->
                            <!-- Botão Inserir -->
                            <div class="btn-group">
                                <a href="usuarios_insere.php">
                                    <button class="btn btn-info">
                                        Inserir
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- Fecha Botão Inserir -->
                    </div>
                </div>
            </div>
            <!-- Fecha ADM Usuários -->
        </div><!-- Fecha Manter os elementos na linha -->

    </main>
    <!-- Link para arquivos Bootstrap Java Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
