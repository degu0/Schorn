<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librabres/css/main_page.css">
    <title>Schorn</title>
</head>

<body>
    <div class="menu">
        <nav>
            <div class="inputs">
                <ul>
                    <div class="logo">
                        <a href="/">
                            <img src="./images/Vector_6.png" width="10" height="10" >Schorn
                        </a>
                    </div>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/construct">Construcao</a>
                    </li>

                    <li>
                        <?php if ($_SESSION == null) { ?>
                            <a href="/usuario/Cadastro">Cadastrar</a>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION == null) { ?>
                            <a href="/login">Login</a>
                        <?php } ?>
                    </li>
            </div>
        </nav>
    </div>
    <form>

        <h1>
            TELA INICIAL
        </h1>
        <p>Colocar as informações do projeto</p>
        <a class="dropdown-item" href="/login/deslog">Sair</a>
</body>

</html>
