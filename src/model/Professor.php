<?php

namespace Schorn\model;

class Professor
{
    private $id;
    private $Nome;
    private $Disciplina;
    private $Carga;
    private $DisponibilidadeTurno;
    private $Turma;

    public function __construct($Nome, $Disciplina, $Carga, $DisponibilidadeTurno, $Turma, $id = null)
    {   
        $this->id = $id;
        $this->Nome = $Nome;
        $this->Disciplina = $Disciplina;
        $this->Carga = $Carga;
        $this->DisponibilidadeTurno = $DisponibilidadeTurno;
        $this->Turma = $Turma;
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->Nome;
    }

    public function getDisciplina()
    {
        return $this->Disciplina;
    }

    public function getCarga()
    {
        return $this->Carga;
    }

    public function getDisponibilidadeTurno()
    {
        return $this->DisponibilidadeTurno;
    }

    public function getTurma()
    {
        return $this->Turma;
    }


}
