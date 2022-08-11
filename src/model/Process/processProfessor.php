<?php
//anotações:O valor '...' da turma deve ir para o combobox dos cadastro do professores
//Primeira coisa cadastrada será o instituto, Disciplinas, Turmas e Professores
//Os institutos deverão perguntar qual será o ensino (Fundamental 1 ou 2 ou ensino medio)
include_once("../BD/conexao.php");

///variáveis para pegar os valores dos cadastros dos professores do site
$valorNome = $_POST['nome'];
$valorDisciplina = $_POST['disciplina'];
$valorCarga = $_POST['carga'];
$valorDisponibilidade = $_POST['cmbDisponibilidade'];
$valorDisponibilidadeDia = $_POST['cmbDisponibilidadeDia'];

$valorTurma = $_POST['cmbTurma'];

//inserindo os valores dos professores passados para o banco de dados
$query_professor = "insert into Professor
             (Nome, Disciplina, Carga, disponibilidades, disponibilidadeDia, Turmas) values 
             ('$valorNome', '$valorDisciplina', '$valorCarga', '$valorDisponibilidade','$valorDisponibilidadeDia', '$valorTurma') ";
             

$cad_professor = mysqli_query($conn, $query_professor);

$consulta = "SELECT * FROM  Professor";
$con = $conn->query($consulta) or die($conn->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Professor</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Disciplina</td>
            <td>Carga</td>
            <td>Disponibilidade</td>
            <td>Disponibilidade dia</td>
            <td>Turma</td>
        </tr>
        <?php  while($dado = $con->fetch_array()) {?>
        <tr>
            <td><?php echo $dado["id"]?></td>
            <td><?php echo $dado["Nome"]?></td>
            <td><?php echo $dado["Disciplina"]?></td>
            <td><?php echo $dado["Carga"]?></td>
            <td><?php echo $dado["disponibilidades"]?></td>
            <td><?php echo $dado["disponibilidadeDia"]?></td>
            <td><?php echo $dado["Turmas"]?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>