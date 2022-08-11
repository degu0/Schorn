<?php
include_once("../BD/conexao.php");


//variáveis para pegar os valores dos cadastros das turmas do site
$valorAno = $_POST['Ano'];
$valorCurso = $_POST['Curso'];
$valorTurma2 = $_POST['Turma'];

//inserindo os valores das turmas passadas para o banco de dados 
$query_turma = "insert into Turmas
             (Ano, Curso, Turma) values 
             ('$valorAno', '$valorCurso', '$valorTurma2') ";

$cad_Turma = mysqli_query($conn, $query_turma);

$consulta = "SELECT * FROM  Turmas";
$con = $conn->query($consulta) or die($conn->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela turma</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Ano</td>
            <td>Curso</td>
            <td>Turma</td>
        </tr>
        <?php  while($dado = $con->fetch_array()) {?>
        <tr>
            <td><?php echo $dado["Ano"]?></td>
            <td><?php echo $dado["Curso"]?></td>
            <td><?php echo $dado["Turma"]?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>