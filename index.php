<?php
require("./alunos.php");
require("./funcao.php");
situacaoNotaAluno($turma);

if (isset($_GET["novaNota"])) {
    $nome = $_GET["nomeAluno"];
    $MudarNota = $_GET["novaNota"];

    MudarNota($turma, $nome, $MudarNota);
}






?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./script.js" defer></script>
    <title>Notas dos Alunos</title>
</head>

<body>
    <form action=""></form>
    <section>
        <h1>Tabela de Notas</h1>
        <table>
            <tr>
                <th>Nome:</th>
                <th>Idade:</th>
                <th>Nota:</th>
                <th>Situação:</th>
            </tr>
            <?php
            foreach ($turma as $aluno) {
            ?>
                <tr onclick="showFormNota('<?= $aluno['nome'] ?>')">
                    <td>
                        <?php
                        echo $aluno["nome"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $aluno["idade"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $aluno["nota"];
                        ?>
                    </td>
                    <td class="<?= strtolower($aluno["situacao"]) ?>">
                        <?=
                        isset($aluno["situacao"]) ?
                            $aluno["situacao"] :
                            "";

                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </section>
    <div class="container-form-nota">
        <form>
            <input type="number" name="novaNota" placeholder="Digite a nova nota">
            <input type="hidden" id="nomeAluno" name="nomeAluno">
            <button>Alterar</button>
        </form>
    </div>
</body>

</html>