<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Recipe Diary</title>
    </head>

    <body>
        <main>
            <div id="mainvisual"><img src="img/mainvisual.jpg" alt="mainvisual"></div>
            <div class="container">
                <h1 class="section-title"></h1>
                <p></p>
            </div>

            <ul>
                <li><img src="img/recipe1.jpg" alt="recipe1"></li>
                <li><img src="img/recipe2.jpg" alt="recipe2"></li>
                <li><img src="img/recipe3.jpg" alt="recipe3"></li>
            </ul>
            <div><a href="#"><button></button></a></div>
        </main>

        <footer>
            <ul>
                <li><a href="https://www.instagram.com/">Instagram</a></li>
                <li><a href="https://twitter.com/">Twitter</a></li>
                <li><a href="https://www.facebook.com/">Facebook</a></li>
            </ul>
            <p>&copy; <?php echo date('Y') ?> Recipe Diary</p>
        </footer>
    </body>
</html>