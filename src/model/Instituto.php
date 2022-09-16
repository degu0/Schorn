<?php 

namespace Schorn\model;

class Instituto 
{

    private $id;
    private $Nome;
    private $Ensino;

    public function __construct($Nome, $Ensino, $id = null)
    {
        $this->Nome = $Nome;
        $this->Ensino = $Ensino;
        $this->id = $id;
    }


    public function getNome()
    {
        return $this->Nome;
    }

    public function getEnsino()
    {
        return $this->Ensino;
    }

    public function getId()
    {
        return $this->id;
    }
}