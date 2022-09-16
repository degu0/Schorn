<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/librabres/css/cad_user.css">
    <title>Schorn - Cadastrar</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="/./images/Vector_10.png" alt="">
        </div>
        <div class="form">
            <form action="/usuario/add" method="POST">
                <div class="head">
                    <div class="title">
                    <img src="/./images/Vector_5.png" alt="" width= "80px">
                        <h1>Schorn</h1>
                    </div>
                </div>

                <div class="input_group">
                    <div class="input-box">
                        <label for="login">Login:</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                </div>

                <div class="enter_button">
                    <button><img src="/./images/Vector_8.png"></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>