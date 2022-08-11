<?php
include_once("../BD/conexao.php");

//variáveis para pegar os valores dos cadastros de instituições no site
$valorNomeInstituto = $_POST['instituto'];
$valorEnsino = $_POST['Ensino'];


//inserindo os valores das instituições passadas para o banco de dados
$query_instituto = "insert into Institucao
             (NomeInstituicao, Ensino) values 
             ('$valorNomeInstituto', '$valorEnsino') ";             

$cad_instituto = mysqli_query($conn, $query_instituto);


$consulta = "SELECT * FROM  Institucao";
$con = $conn->query($consulta) or die($conn->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela instituto</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Instituição</td>
            <td>Ensino</td>
        </tr>
        <?php  while($dado = $con->fetch_array()) {?>
        <tr>
            <td><?php echo $dado["NomeInstituicao"]?></td>
            <td><?php echo $dado["Ensino"]?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>