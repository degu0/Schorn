<?php

use Schorn\controller\MainPageController;
use Schorn\controller\CadastroInstitutoController;
use Schorn\controller\CadastroProfessorController;
use Schorn\controller\CadastroTurmaController;
use Schorn\controller\TabelasTurmaController;
 
return [
    "/main_page" => MainPageController::class,
    "/CadastroInstituto"=> CadastroInstitutoController::class,
    "/CadastroProfessor" => CadastroProfessorController::class,
    "/CadastroTurma" => CadastroTurmaController::class,
    "/Tabela" => TabelasTurmaController::class
];