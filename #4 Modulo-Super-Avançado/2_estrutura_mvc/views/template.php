<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titulo do Site</title>

    <link rel="stylesheet" href="<? echo BASE_URL; ?>/assets/css/style.css" />
    </head>
    <body>
        <header>
            <h1>Topo do site</h1>
        </header>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>   

        <footer>
            <h5>Rodapé do site</h5>
        </footer>
    </body>
</html>