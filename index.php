<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Curso de PHP | COD3R</title>
</head>

<body>
    <header class="header">
        <h1 class="title">Curso PHP</h1>
        <h2 class="sub-title">Índice dos exercícios</h2>
    </header>
    <main class="main">
        <div class="content">
            <nav class="modules">
                <div class="module border-charcoal">
                    <h3 class="module-title background-charcoal">Módulo 01</h3>
                    <ul>
                        <li class="list-item"><a href="./pages/exercise.php" class="link">Exercício A</a></li>
                        <li class="list-item"><a href="#" class="link">Exercício B</a></li>
                        <li class="list-item"><a href="#" class="link">Exercício C</a></li>
                        <li class="list-item"><a href="#" class="link">Exercício D</a></li>
                    </ul>
                </div>
                <div class="module border-pewter-blue">
                    <h3 class="module-title background-pewter-blue">Módulo 02</h3>
                    <ul>
                        <li class="list-item"><a href="#" class="link">Exercício A</a></li>
                        <li class="list-item"><a href="#" class="link">Exercício B</a></li>
                        <li class="list-item"><a href="#" class="link">Exercício C</a></li>
                        <li class="list-item"><a href="#" class="link">Exercício D</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R &amp; ALUNOS &copy; <?= date('Y'); ?>
    </footer>
</body>

</html>