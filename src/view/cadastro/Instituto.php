<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/librabres/css/cad_ins.css">
    <title>Schorn - Cadastro de instituição</title>
</head>

<body>
    <div class="instituto">
        <h1>Cadastro da instituição</h1>
        <form action="/cadastro/Instituto/add" method="POST">
            <div>
                <p>Nome da instituição:</p>
                <input type="text" name="Nome" id="Nome">
            </div>
            <div>
                <label>Ensino:</label><br>
                <select name="Ensino" id="Ensino" value="Ensino">
                    <option value="Selecione">Selecione</option>
                    <option value="Ensino_Fundamental_I">Ensino Fundamental I</option>
                    <option value="Ensino_Fundamental_II">Ensino Fundamental II</option>
                    <option value="Ensino_Médio">Ensino Médio</option>
                </select>
            </div>
        <div>
            <input type="submit" value="entrar">
        </div>
        </form>
    </div>

</body>

</html>