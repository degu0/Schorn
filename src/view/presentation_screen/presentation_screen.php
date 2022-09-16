<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schorn</title>
</head>

<body>
    <div class="menu">
        <nav>
            <div class="inputs">
                <ul>
                    <div class="logo">
                        <a href="/">
                            <img src="./images/Vector_6.png" width="10" height="10">Schorn
                        </a>
                    </div>
                    <a href="/usuario/Cadastro">Cadastrar</a><br>
                    <a href="/login">Login</a>
            </div>
        </nav>
    </div>
    <form>
        <h1>
            TELA DE APRESENTACAO
        </h1>
        <p>Colocar as informações do projeto</p>
        <?php if ($_SESSION != null) { ?>
            <p>logado</p>
        <?php } ?>
        <a class="dropdown-item" href="/login/deslog">Sair</a>
</body>

</html>