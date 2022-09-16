<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/librabres/css/horario.css">
    <script src="/librabres/js/DragDrop.js" defer></script>
    <title>Schorn - Horarios</title>
</head>

<body>
    <a href="/home">HOME</a><br>
    <a href="/construct">Construcao</a>
    <h1>Tabela horário</h1>
    <div class="board">
        <div class="dropzone">
            <?php foreach ($listaProfessor as $professor) { ?>
                <div class="card" draggable="true">
                    <div class="content"><?php echo $professor->getNome(); ?></div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php foreach ($listaTurma as $turma) { ?>
        <div class="board">
            <h3><?php echo $turma->getAno(); ?></h3>
            <h4><?php echo $turma->getCurso(); echo $turma->getTurma(); ?></h4>
            <div class="dropzone">
            </div>
        </div>
    <?php } ?>
</body>

</html>