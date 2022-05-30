<?php
include 'conexao.php';

$pesquisa = $_GET['pesquisa'] ?? '';

$sql_list = "SELECT * FROM `noticias` WHERE titulo  LIKE '%$pesquisa%' OR descricao  LIKE '%$pesquisa%' OR conteudo  LIKE '%$pesquisa%' ";

$listar = mysqli_query($conn, $sql_list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Notícias</title>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48;
                color: white;
        }
    </style>
</head>
<body>
    <nav id="header">
        <div>
            <h1>NEWS</h1>
            <div>
                <nav>
                    <a href="cadastrar.php">Cadastrar Notícias</a>
                    <a href="index.php">Ver Notícias</a>
                </nav>
                <form action="index.php" method="get" id="busca_barra">
                    <input type="text" name="pesquisa" id="busca">
                    <button type="submit" id="btn_busca"><span class="material-symbols-outlined">search</span></button>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div id="bloc_noticias">
            <?php
                while ($listar_not = mysqli_fetch_array($listar)) {
                    $id = $listar_not['id'];
                    $titulo = $listar_not['titulo'];
                    $descricao = $listar_not['descricao'];
                    $conteudo = $listar_not['conteudo'];

                ?>
                <div class="noticias">
                    <h2><?php echo $titulo; ?></h2>
                    <h3><?php echo $descricao; ?></h3>
                    <p><?php echo $conteudo; ?></p>
            </div>
                <?php }?>
        </div>
    </main>
</body>
</html>