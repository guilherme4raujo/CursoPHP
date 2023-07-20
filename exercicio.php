<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>Exercicio</title>
</head>
<body class= "exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">

        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}"?>" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>

    </nav>
    <main class="principal">
        <div class="conteudo">
          
            <?php
                   include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}");

             ?>   
        </div>

    </main>]
    <footer class="rodape">
        COD3R & Alunos <?= date ('Y') ?>
    </footer>
    
</body>
</html>