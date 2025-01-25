<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php moderno</title>
    <link rel="shortcut icon" href="./assets/img/php.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/code-format/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/fonts/font.css">

</head>
<body>

    <main>
        <h1>Aprendiendo php</h1>
    
        <?php

            $lista_blanca = ['wip', 'links', 'wic', 'progfun', 'inmut', 'recurs', 'fnfstcls', 'fnosr', 'fnarrow', 'cveuse', 'closure', 'cllbck', 'fnpipe', 'fncpn', 'mitn', 'fnaymp', 'fnayfr', 'fnayre', 'fnut', 'fnayuf', 'fnaywk'];

            if (count($_GET) > 0 && array_key_exists('view', $_GET)){
                if (in_array($_GET['view'], $lista_blanca)) {
                    $vista = $_GET['view'];
                    if ($vista !== 'links') {
                        include 'views/back.php';
                    }
                    require 'views/'.$vista.'.php';
                }else{
                    require 'views/links.php';
                }
            }else{
                require 'views/links.php';
            }

        
        ?>
    
    </main>

    <script src="assets/code-format/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

</body>
</html>