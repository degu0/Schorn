<?php

namespace Schorn\model;

class Turma
{
    private $id;
    private $Ano;
    private $Curso;
    private $Turma;

    public function __construct($Ano, $Curso, $Turma,$id = null)
    {
        $this->Ano = $Ano;
        $this->Curso = $Curso;
        $this->Turma = $Turma;
        $this->id = $id;
    }


    public function getAno()
    {
        return $this->Ano;
    }

    public function getCurso()
    {
        return $this->Curso;
    }

    public function getTurma()
    {
        return $this->Turma;
    }

    public function getId()
    {
        return $this->id;
    }
}
