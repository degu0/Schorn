<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schorn - Tabela instituto</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Ensino</td>
            <td>...</td>
        </tr>
        <tbody>
            <?php foreach ($listaInstituto as $instituto) { ?>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <td scope="row" colspan="1"> <?php echo $instituto->getId(); ?></td>
                    <td colspan="1"> <?php echo $instituto->getNome(); ?></td>
                    <td colspan="1"> <?php echo $instituto->getEnsino(); ?></td>
                    <td colspan="2">
                        <a href='/cadastro/Instituto/edit?id<?php echo $instituto->getId(); ?>'>e</a>
                        <a  href="/tabela/Instituto/delete<?php echo $instituto->getId(); ?>">
                            <img src="/librabres/images/Vector_delete.png">
                            </img>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p>aqui vai ter a possibilidade em modificar os dados dos institutos cadastradas anteriormente</p>
    <p>Excluir e Modificar as informações</p>

    <a href="/construct">Construcao</a>
</body>

</html>