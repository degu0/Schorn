<?php

namespace Schorn\model\BD;

use Schorn\model\BD\Conexao;
use Schorn\model\Turma;


class TurmaBD
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function getLista()
    {
        $comando = "SELECT * FROM Turma;";
        $resultado = $this->conexao->mysqli->query($comando);
        if ($resultado == false) {
            return null;
        }
        $listaTurma = [];

        while ($linha = $resultado->fetch_assoc()) {
            $listaTurma[] = new Turma($linha["Ano"], $linha["Curso"], $linha["Turma"]);
        }
        
        $this->conexao->fecharConexao();
        return $listaTurma;
    }

    public function atualizar(Turma $institutoAtualizado)
    {
        $comando = "UPDATE TABLE Turma SET Ano = ?, Curso = ?, Turma = ? WHERE id = ?;";

        $preparacao = $this->conexao->mysqli->prepare($comando);
        $preparacao->bind_param(
            "sssd",
            $institutoAtualizado->getAno(),
            $institutoAtualizado->getCurso(),
            $institutoAtualizado->getTurma(),
            $id
        );
        $preparacao->execute();

        $resultado = $preparacao->get_result();
        if ($resultado == false) {
            return null;
        }
        $this->conexao->fecharConexao();
    }

    public function remover($id)
    {
        $comando = "DELETE FROM TABLE Turma WHERE id = ?;";

        $preparacao = $this->conexao->mysqli->prepare($comando);
        var_dump($id);
        $preparacao->bind_param("s", $id);
        $preparacao->execute();

        $resultado = $preparacao->get_result();
        if ($resultado == false) {
            return null;
        }

        $this->conexao->fecharConexao();
    }

    public function adicionar(Turma $turma)
    {
        $comando = "INSERT INTO Turma (Ano, Curso, Turma) VALUES(?, ?, ?);";
        $ano = $turma->getAno();
        $curso = $turma->getCurso();
        $turmas = $turma->getTurma();


        $preparacao = $this->conexao->mysqli->prepare($comando);

        $preparacao->bind_param(
            "sss",
            $ano,
            $curso,
            $turmas
        );

        $preparacao->execute();

        $resultado = $preparacao->get_result();

        if ($resultado == false) {
            return null;
        }

        $this->conexao->fecharConexao();
    }
}
