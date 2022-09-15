<?php

namespace Schorn\controller;

use Schorn\controller\inheritance\Controller;
use Schorn\model\BD\InstitutoBD;
use Schorn\model\Instituto;
use Schorn\model\BD\ProfessorBD;
use Schorn\model\Professor;
use Schorn\model\BD\TurmaBD;
use Schorn\model\Turma;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;


class CadastroController extends Controller implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $path_info = $request->getServerParams()["PATH_INFO"];
        $response = null;

         if (strpos($path_info, "Instituto")) {
            $response = $this->institute();
            if (strpos($path_info, "add")){
               $response = $this->addInstituto($request);
            }
        } else if (strpos($path_info, "Professor")) {
            $response = $this->teacher();
            if (strpos($path_info, "add")){
                $response = $this->addProfessor($request);
             }
        } else if (strpos($path_info, "Turma")) {
            $response = $this->school_class();
            if (strpos($path_info, "add")){
                $response = $this->addTurma($request);
             }
        }else {
            $bodyHttp = $this->getHTTPBodyBuffer("/erro/Erro_404.php",);
            $response = new Response(200, [], $bodyHttp);
        }
        return $response;
    }

    public function institute(): ResponseInterface
    {
        $bodyHttp = $this->getHTTPBodyBuffer("/cadastro/Instituto.php");
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function addInstituto(ServerRequestInterface $request): ResponseInterface
    {
        $instituto = new Instituto(
            $request->getParsedBody()["Nome"],
            $request->getParsedBody()["Ensino"]
        );

        
        $institutoBD = new InstitutoBD();
        $institutoBD->adicionar($instituto);

        $response = new Response(302, ["Location" => "/tabela/Instituto"], null);

        return $response;
    }
    public function teacher(): ResponseInterface
    {
        $bodyHttp = $this->getHTTPBodyBuffer("/cadastro/Professor.php");
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function addProfessor(ServerRequestInterface $request): ResponseInterface
    {
        $professor = new Professor(
            $request->getParsedBody()["Nome"],
            $request->getParsedBody()["Disciplina"],
            $request->getParsedBody()["Carga"],
            $request->getParsedBody()["cmbDisponibilidade"],
            $request->getParsedBody()["cmbTurma"]
        );

        
        $professorBD = new ProfessorBD();
        $professorBD->adicionar($professor);

        $response = new Response(302, ["Location" => "/tabela/Professor"], null);

        return $response;
    }
    
    public function school_class(): ResponseInterface
    {
        $bodyHttp = $this->getHTTPBodyBuffer("/cadastro/Turma.php");
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function addTurma(ServerRequestInterface $request): ResponseInterface
    {
        $turma = new Turma(
            $request->getParsedBody()["Ano"],
            $request->getParsedBody()["Curso"],
            $request->getParsedBody()["Turma"]
        );

        
        $turmaBD = new TurmaBD();
        $turmaBD->adicionar($turma);

        $response = new Response(302, ["Location" => "/tabela/Turma"], null);

        return $response;
    }
}
