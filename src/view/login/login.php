<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librabres/css/login.css">
    <title>Schorn - Login</title>
</head>

<body>
    <section class="area_login">
        <div class="login">
            <div>
                <img src="./images/Vector_5.png">
            </div>

            <form action="/login/logar" method="POST">
                <p class="Schorn">Schorn</p>
                <input type="text" name="login" placeholder="Nome de Usuario" autofocus>
                <input type="password" name="senha" placeholder="Senha">
                <button><img src="/./images/Vector_8.png"></button>
            </form>
            <p>Ainda nao tem uma conta?</p><a href="/usuario/Cadastro">Criar conta</a>
        </div>
    </section>
    <script src="/librares/js/bootstrap.min.js"></script>
</body>

</html>
