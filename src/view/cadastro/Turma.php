<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/librabres/css/cad_tur.css">
    <title>Schorn - Cadastro Turma</title>
</head>

<body>
    <h1>Cadastros de Turmas</h1>
    <form action="/cadastro/Turma/add" method="POST">
        <div class="turma">
            <div>
                <label>Ano:</label>
                <div class="option">
                    <select name="Ano" id="Ano">
                        <option value="">Selecione</option>
                        <option value="1 ano">1º ano</option>
                        <option value="2 ano">2º ano</option>
                        <option value="3 ano">3º ano</option>
                    </select>
                </div>
            </div>
            <div>
                <label>Curso:</label><br>
                <div class="option">
                    <select name="Curso" id="Curso">
                        <option value="">Selecione</option>
                        <option value="TDS">Desenvolvimento de Sistemas</option>
                        <option value="MKT">Marketing</option>
                    </select>
                </div>
            </div>
            <div>
                <label>Turma:</label><br>
                <div class="option">
                    <select name="Turma" id="Turma">
                        <option value="">Selecione</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                </div>
            </div>
            <div>
                <input type="submit" value="entrar">
            </div>
        </div>
    </form>
</body>

</html>