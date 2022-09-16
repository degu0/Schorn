<?php

namespace Schorn\model\BD;

use Schorn\model\BD\Conexao;
use Schorn\model\Professor;


class ProfessorBD
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function getLista()
    {
        $comando = "SELECT * FROM Professor;";
        $resultado = $this->conexao->mysqli->query($comando);
        if ($resultado == false) {
            return null;
        }
        $listaProfessor = [];

        while ($linha = $resultado->fetch_assoc()) {
            $listaProfessor[] = new Professor($linha["Nome"], $linha["Disciplina"], $linha["Carga"], $linha["disponibilidades"], $linha["Turma"], $linha["id"]);
        }

        $this->conexao->fecharConexao();
        return $listaProfessor;
    }

    public function atualizar(Professor $institutoAtualizado)
    {
        $comando = "UPDATE TABLE Professor SET Nome = ?, Disciplina = ?, Carga = ?, disponibilidades = ?, Turma = ? WHERE id = ?;";

        $preparacao = $this->conexao->mysqli->prepare($comando);
        $preparacao->bind_param(
            "sssd",
            $institutoAtualizado->getNome(),
            $institutoAtualizado->getDisciplina(),
            $institutoAtualizado->getCarga(),
            $institutoAtualizado->getDisponibilidadeTurno(),
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
        $comando = "DELETE FROM TABLE Professor WHERE id = ?;";

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

    public function adicionar(Professor $professor)
    {
        $comando = "INSERT INTO Professor (Nome, Disciplina, Carga, disponibilidades, Turma) VALUES(?, ?, ?, ?, ?);";
        $nome = $professor->getNome();
        $disciplina = $professor->getDisciplina();
        $carga = $professor->getCarga();
        $disponibilidadeTurno = $professor->getDisponibilidadeTurno();
        $turma = $professor->getTurma();


        $preparacao = $this->conexao->mysqli->prepare($comando);
        $preparacao->bind_param(
            "sssss",
            $nome,
            $disciplina,
            $carga,
            $disponibilidadeTurno,
            $turma
        );

        $preparacao->execute();

        $resultado = $preparacao->get_result();

        if ($resultado == false) {
            return null;
        }

        $this->conexao->fecharConexao();
    }
}
