<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schorn - Tabela Professor</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Disciplina</td>
            <td>Carga</td>
            <td>Disponibilidade</td>
            <td>Turma</td>
            <td>...</td>
        </tr>
        <tbody>
        <?php foreach ($listaProfessor as $professor) { ?>
            <tr>
                <td scope="row" colspan="1"> <?php echo $professor->getId(); ?></td>
                <td colspan="1"> <?php echo $professor->getNome(); ?></td>
                <td colspan="1"> <?php echo $professor->getDisciplina(); ?></td>
                <td colspan="1"> <?php echo $professor->getDisponibilidadeTurno(); ?></td>
                <td colspan="1"> <?php echo $professor->getCarga(); ?></td>
                <td colspan="1"> <?php echo $professor->getTurma(); ?></td>                    
                <td colspan="2">
                        <a href='/cadastro/Professor/edit?id<?php echo $professor->getId(); ?>'>e</a>
                        <a href="/tabela/Professor/delete<?php echo $professor->getId(); ?>">d</a>
                    </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
    <p>aqui vai ter a possibilidade em modificar os dados dos professores cadastradas anteriormente</p>
    <p>Excluir e Modificar as informações</p>

    <a href="/construct">Construcao</a>
</body>
</html>
