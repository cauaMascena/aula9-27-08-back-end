<?php

require("./alunos.php");
require("./funcao.php");
situacaoNotaAluno($turma);


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notas dos Alunos</title>
</head>

<body>
    <form action=""></form>
    <section >
        <h1>Tabela de Notas</h1>
        <table>
        <tr>
    <th>Nome:</th>
    <th>Idade:</th>
    <th>Nota:</th>
    <th>Situação:</th>
</tr>
<?php
foreach ($turma as $alunos) {
?>
<tr>
    <td>
        <?php
        echo $alunos["nome"];
        ?>
    </td>
    <td>
        <?php
        echo $alunos["idade"];
        ?>
    </td>
    <td>
        <?php
        echo $alunos["nota"];
        ?>
    </td>
    <td>
        <?php
        isset($turma["situacao"]) ?
        $turma["situacao"] : 
        "";
    
        ?>
    </td>
</tr>
            <?php
}
?>
            
        </table>
    </section>
</body>

</html>