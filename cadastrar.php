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
    <title>Cadastro de Notícias</title>
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
                <form action="index.php.php" method="get" id="busca_barra">
                    <input type="text" name="pesquisa" id="busca">
                    <button type="submit" id="btn_busca"><span class="material-symbols-outlined">search</span></button>
                </form>
            </div>
        </div>
    </nav>
    <main id="main_cad">
        <div id="cadastro">
            <form action="cadastro_cod.php" method="post">
                <label for="">Titulo: <input type="text" name="titulo"></label>
                <br>
                <label for="">Descrição: <input type="text" name="descricao"></label>
                <br>
                <label for="">Conteúdo: <textarea name="conteudo" id="conteudo" cols="100" rows="30"></textarea></label>
                <input type="submit" value="Salvar Notícia" id="btn_salvar">
            </form>
        </div>
    </main>
</body>
</html>