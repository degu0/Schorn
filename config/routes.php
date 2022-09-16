<?php

use Schorn\controller\PresentationController;
use Schorn\controller\HomeController;
use Schorn\controller\LoginController;
use Schorn\controller\CadastroController;
use Schorn\controller\TabelaController;
use Schorn\controller\ConstructController;
use Schorn\controller\UsuarioController;

return [
    "/home" => HomeController::class,
    "/" => PresentationController::class,
    "/login" => LoginController::class,
    "/construct" => ConstructController::class,
    "/login/logar" => LoginController::class,
    "/login/deslog" => LoginController::class,
    "/cadastro/Instituto" => CadastroController::class,
    "/cadastro/Instituto/add" => CadastroController::class,
    "/cadastro/Professor" => CadastroController::class,
    "/cadastro/Professor/add" => CadastroController::class,
    "/cadastro/Turma" => CadastroController::class,
    "/cadastro/Turma/add" => CadastroController::class,
    "/tabela/Instituto" => TabelaController::class,
    "/tabela/Instituto/edit" => TabelaController::class,
    "/tabela/Instituto/delete" => TabelaController::class,
    "/tabela/Professor" => TabelaController::class,
    "/tabela/Professor/edit" => TabelaController::class,
    "/tabela/Professor/delete" => TabelaController::class,
    "/tabela/Turma" => TabelaController::class,
    "/tabela/Turma/edit" => TabelaController::class,
    "/tabela/Turma/delete" => TabelaController::class,
    "/tabela/Horario" => TabelaController::class,
    "/usuario/Cadastro" => UsuarioController::class,
    "/usuario/add" => UsuarioController::class,
];
