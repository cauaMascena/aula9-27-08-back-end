<?php
function situacaoNotaAluno(array &$turma) {
    foreach($turma as $chave => $aluno) {
        if ($aluno["nota"] >= 50) {
            $turma[$chave]["situacao"] = "aprovado";
 
        } else{
            $turma[$chave]["situacao"] = "reprovado";
        } 
    }
    return;
}
function MudarNota(array &$turma, $nome, $MudarNota){
 
    foreach($turma as $chave => $aluno) {
        if($aluno["nome"] == $nome ){
            $turma[$chave]["nota"] = $MudarNota;
        }
    }
    return;
}
?>