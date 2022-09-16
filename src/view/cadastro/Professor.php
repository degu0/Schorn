<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/librabres/css/cad_pro.css">
    <title>Schorn - Cadastro de Professor</title>
</head>

<body>
    <h1>Cadastro de professor</h1>
    <form action="/cadastro/Professor/add" method="POST">
        <div class="professor">
            <div>
                <!-- Cadastro do nome do professor -->
                <label>Nome:</label><br>
                <input type="text" name="Nome" id="Nome">
            </div>
            <div>
                <!-- Cadastro da disciplina do professor -->
                <label>Disciplina:</label><br>
                <input type="text" name="Disciplina" id="Disciplina">
            </div>
            <div>
                <!-- Cadastro da carga horaria do professor -->
                <label>Carga:</label><br>
                <input type="text" name="Carga" id="Carga">
            </div>
            <div>
                <!-- Cadastro da disponibilidade do professor -->
                <label>Disponibilidade:</label><br>
                <select id="disponibilidade" name="cmbDisponibilidade" id="cmbDisponibilidade">
                    <option>Selecione</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                </select>
            </div>
            <div>
                <!-- Cadastro das turmas que o professor dará aulas-->
                <label>Turma:</label><br>
                <select id="turma" name="cmbTurma" id="cmdTurma">
                    <option>Selecione</option>
                    <option value="1º ano">1º ano</option>
                    <option value='2º ano'>2º ano</option>
                    <option value='3º ano'>3º ano</option>
                </select>
            </div>
            <div>
                <input type="submit" value="entrar">
            </div>
        </div>

    </form>
</body>

</html>