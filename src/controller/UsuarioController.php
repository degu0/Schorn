<?php

namespace Schorn\controller;

use Schorn\controller\inheritance\Controller;
use Schorn\model\BD\UsuarioBD;
use Schorn\model\Usuario;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class UsuarioController extends Controller implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $path_info = $request->getServerParams()["PATH_INFO"];
        $response = null;

         if (strpos($path_info, "Cadastro")) {
            $response = $this->create();
        } else if (strpos($path_info, "add")) {
            $response = $this->addUsuario($request);
        }else {
            $bodyHttp = $this->getHTTPBodyBuffer("/erro/Erro_404.php",);
            $response = new Response(200, [], $bodyHttp);
        }
        return $response;
    }

    public function create(): ResponseInterface
    {
        $bodyHttp = $this->getHTTPBodyBuffer("/usuario/Cadastro.php");
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
    public function addUsuario(ServerRequestInterface $request): ResponseInterface
    {
        $usuario = new Usuario(
            $request->getParsedBody()["login"],
            null,
            $request->getParsedBody()["senha"]
        );

        
        $usuarioBD = new UsuarioBD();
        $usuarioBD->adicionar($usuario);
        $loginUsuario = $request->getParsedBody()["login"];

        $_SESSION["usuario"] = $loginUsuario;
        $response = new Response(302, ["Location" => "/home"], null);

        return $response;
    }
    // public function list(): ResponseInterface
    // {
    //     $usuarioBD = new UsuarioBD();

    //     $dados = ["listaUsuarios" => $usuarioBD->getLista()];

    //     $bodyHttp = $this->getHTTPBodyBuffer("/", $dados);
    //     $response = new Response(200, [], $bodyHttp);
    //     return $response;
    // }
    // public function atualizar(ServerRequestInterface $request): ResponseInterface
    // {
    //     $usuarioBD = new UsuarioBD();
    //     $usuario = $usuarioBD->getUsuario($request->getQueryParams()["id"]);

    //     $bodyHttp = $this->getHTTPBodyBuffer("/", [$usuario]);
    //     $response = new Response(200, [], $bodyHttp);
    //     return $response;
    // }
    // public function update(ServerRequestInterface $request): ResponseInterface
    // {
    //     $usuarioBD = new UsuarioBD();
    //     $usuario = new Usuario(
    //         $request->getParsedBody()["login"],
    //         $request->getParsedBody()["nivel"],
    //         null,
    //         $request->getParsedBody()["senha"],
    //         $request->getParsedBody()["id"]
    //     );

    //     $usuarioBD->atualizar($usuario);

    //     return $this->list();
    // }

    // public function delete(ServerRequestInterface $request): ResponseInterface
    // {

    //     $usuarioBD = new UsuarioBD();
    //     $usuarioBD->remover($request->getQueryParams()["id"]);

    //     $response = new Response(200, ["Location" => "/"], null);
    //     return $response;
    // }
}
