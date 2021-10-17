<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= asset("imgs/fav.png"); ?>" type="image/x-icon">

    <!-- Todos CSS minified -->
    <link rel="stylesheet" href="<?= asset("vendor/minify/style.css"); ?>">

    <!-- TITULO -->
    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?= $router->route("web.home"); ?>">MVC Sample</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="home">
                    <a class="nav-link" href="<?= $router->route("web.home"); ?>">Home</a>
                </li>
                <li class="nav-item" id="about">
                    <a class="nav-link" href="<?= $router->route("web.about"); ?>">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>

    <main style="padding-top: 80px;">
        <?= $this->section('content'); ?>
    </main>

    <footer>
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                <b><?= SITE ?></b> - Todos direitos reservados
            </div>
        </div>

    </footer>

    <!-- Todos JS minified -->
    <script src="<?= asset("vendor/minify/scripts.js"); ?>"></script>

    <!-- OUTROS SCRIPTS -->
    <?= $this->section('scripts'); ?>
</body>

</html>