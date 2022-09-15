<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schorn - Tabela turma</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Ano</td>
            <td>Curso</td>
            <td>Turma</td>
            <td>...</td>
        </tr>
        <tbody>
        <?php foreach ($listaTurma as $turma) { ?>
            <tr>
                <td colspan="1"> <?php echo $turma->getAno(); ?></td>
                <td colspan="1"> <?php echo $turma->getCurso(); ?></td>
                <td colspan="1"> <?php echo $turma->getTurma(); ?></td>
                <td colspan="2">
                        <a href='/cadastro/Turma/edit?id<?php echo $turma->getId(); ?>'>e</a>
                        <a href="/tabela/Turma/delete<?php echo $turma->getId(); ?>">d</a>
                    </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
    <p>aqui vai ter a possibilidade em modificar os dados das turmas cadastradas anteriormente</p>
    <p>Excluir e Modificar as informações</p>
    <a href="/construct">Construcao</a>
</body>
</html>
