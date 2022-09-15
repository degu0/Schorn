<?php

namespace Schorn\controller;

use Schorn\controller\inheritance\Controller;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Schorn\model\BD\InstitutoBD;
use Schorn\model\BD\ProfessorBD;
use Schorn\model\BD\TurmaBD;

class TabelaController extends Controller implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $path_info = $request->getServerParams()["PATH_INFO"];
        $response = null;

         if (strpos($path_info, "Instituto")) {
            $response = $this->institute();
            if (strpos($path_info, "edit")){
                $response = $this->editInstituto($request);
             }else if (strpos($path_info, "delete")){
                $response = $this->deleteInstituto($request);
             }
        } else if (strpos($path_info, "Professor")) {
            $response = $this->teacher();
            if (strpos($path_info, "edit")){
                $response = $this->editProfessor($request);
             }else if (strpos($path_info, "delete")){
                $response = $this->deleteProfessor($request);
             }
        } else if (strpos($path_info, "Turma")) {
            $response = $this->school_class();
            if (strpos($path_info, "edit")){
                $response = $this->editTurma($request);
             }else if (strpos($path_info, "delete")){
                $response = $this->deleteTurma($request);
             }
        } else if (strpos($path_info, "Horario")) {
            $response = $this->schedule();
        }else {
            $bodyHttp = $this->getHTTPBodyBuffer("/erro/Erro_404.php",);
            $response = new Response(200, [], $bodyHttp);
        }
        return $response;
    }

    public function institute(): ResponseInterface
    {
        $institudoBD = new InstitutoBD();

        $listaInstitutos = $institudoBD->getLista();
        $bodyHttp = $this->getHTTPBodyBuffer("/tabela/Instituto.php", ["listaInstituto" => $listaInstitutos]);
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function editInstituto(): ResponseInterface
    {
        $id = $_GET['id'];
        $institudoBD = new InstitutoBD();

        $institudoBD->atualizar($id);
        $response = new Response(302, ["Location" => "/cadastro/Instituto"], null);

        return $response;
    }
    public function deleteInstituto(): ResponseInterface
    {
        $id = $_GET['id'];
        $institudoBD = new InstitutoBD();

        $institudoBD->remover($id);
        $response = new Response(302, ["Location" => "/tabela/Instituto"], null);

        return $response;
    }
    public function teacher(): ResponseInterface
    {
        $professorBD = new ProfessorBD();

        $listaProfessor = $professorBD->getLista();
        $bodyHttp = $this->getHTTPBodyBuffer("/tabela/Professor.php", ["listaProfessor" => $listaProfessor]);
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function editProfessor(): ResponseInterface
    {
        $id = $_GET['id'];
        $professorBD = new ProfessorBD();

        $professorBD->atualizar($id);
        $response = new Response(302, ["Location" => "/cadastro/Instituto"], null);

        return $response;
    }
    public function deleteProfessor(): ResponseInterface
    {
        $id = $_GET['id'];
        $professorBD = new ProfessorBD();

        $professorBD->remover($id);
        $response = new Response(302, ["Location" => "/tabela/Instituto"], null);

        return $response;
    }
    public function school_class(): ResponseInterface
    {
        $turmaBD = new TurmaBD();

        $listaTurma = $turmaBD->getLista();
        $bodyHttp = $this->getHTTPBodyBuffer("/tabela/Turma.php", ["listaTurma" => $listaTurma]);
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function editTurma(): ResponseInterface
    {
        $id = $_GET['id'];
        $turmaBD = new TurmaBD();

        $turmaBD->atualizar($id);
        $response = new Response(302, ["Location" => "/cadastro/Instituto"], null);

        return $response;
    }
    public function deleteTurma(): ResponseInterface
    {
        $id = $_GET['id'];
        $turmaBD = new TurmaBD();

        $turmaBD->remover($id);
        $response = new Response(302, ["Location" => "/tabela/Instituto"], null);

        return $response;
    }
    public function schedule(): ResponseInterface
    {
        $bodyHttp = $this->getHTTPBodyBuffer("/tabela/Horario.php");
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
}
