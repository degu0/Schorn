<?php

namespace Schorn\model\BD;

use Schorn\model\BD\Conexao;
use Schorn\model\Instituto;


class InstitutoBD
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function getLista()
    {
        $comando = "SELECT * FROM Institucao;";
        $resultado = $this->conexao->mysqli->query($comando);
        if ($resultado == false) {
            return null;
        }
        $listaInstituto = [];

        while ($linha = $resultado->fetch_assoc()) {
            $listaInstituto[] = new Instituto($linha["NomeInstituicao"], $linha["Ensino"],$linha["id"]);
        }
        
        $this->conexao->fecharConexao();
        return $listaInstituto;
    }

    public function atualizar(Instituto $institutoAtualizado)
    {
        $comando = "UPDATE TABLE Institucao SET NomeInstituicao = ?, Ensino = ? WHERE id = ?;";

        $preparacao = $this->conexao->mysqli->prepare($comando);
        $preparacao->bind_param(
            "sssd",
            $institutoAtualizado->getNome(),
            $institutoAtualizado->getEnsino(),
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
        $comando = "DELETE FROM TABLE Institucao WHERE id = ?;";

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

    public function adicionar(Instituto $instituto)
    {
        $comando = "INSERT INTO Institucao (NomeInstituicao, Ensino) VALUES(?, ?);";
        $nome = $instituto->getNome();
        $ensino = $instituto->getEnsino();


        $preparacao = $this->conexao->mysqli->prepare($comando);

        $preparacao->bind_param(
            "ss",
            $nome,
            $ensino
        );

        $preparacao->execute();

        $resultado = $preparacao->get_result();

        if ($resultado == false) {
            return null;
        }

        $this->conexao->fecharConexao();
    }
}
