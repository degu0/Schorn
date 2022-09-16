<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/librabres/css/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="/librabres/css/bootstrapcss/sticky-footer-navbar.css">
    <title>Schorn</title>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <svg xmlns="/librabres/images/Vector_5.png" width="40" height="32" fill="currentColor" class="bi bi-box2-heart" viewBox="0 0 16 16">
                    </svg>
                    Schorn</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <?php if ($_SESSION == null) { ?>
                                <a class="nav-link active" aria-current="page" href="/login">Login</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <?php if ($_SESSION == null) { ?>
                                <a class="nav-link active" aria-current="page" href="/usuario/Cadastro">Cadastrar</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/construct">Construcao</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-shrink-0">
        <div class="container">