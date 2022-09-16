<?php

namespace Schorn\controller;

use Schorn\controller\inheritance\Controller;
use Schorn\model\BD\conexao;
use Schorn\model\BD\UsuarioBD;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Schorn\model\Usuario;

class LoginController extends Controller implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $path_info = $request->getServerParams()["PATH_INFO"];
        $response = null;

        if (strpos($path_info, "logar")) {
            $response = $this->logar($request);
        } else if (strpos($path_info, "deslog")) {
            $response = $this->deslogar();
        } else {
            $response = $this->index();
        }
        return $response;
    }
    public function index(): ResponseInterface
    {
        if (array_key_exists("usuario", $_SESSION)) {
            return new Response(302, ["Location" => "/"],);
        } else {
            $bodyHTTP = $this->getHTTPBodyBuffer("/login/login.php");
            $response = new Response(200, [], $bodyHTTP);
            return $response;
        }
    }
    public function logar(ServerRequestInterface $request): ResponseInterface
    {
        
        $usuarioBD = new UsuarioBD;
        $loginUsuario = $request->getParsedBody()["login"];
        $senhaUsuario = $request->getParsedBody()["senha"];
        $user = new Usuario($loginUsuario, null, $senhaUsuario, null);
        $senhaMD5 = $user->getSenhaMd5();
        $usuario = $usuarioBD->queryLogin($loginUsuario, $senhaMD5);

        if (!empty($usuario)) {
            $_SESSION["usuario"] = $loginUsuario;
            return new Response(302, ["Location" => "/home"],);
        } else {
            return new Response(302, ["Location" => "/login"],);
        }
    }
    public function deslogar(): ResponseInterface
    {
        session_unset();
        return new Response(302, ["Location" => "/"],);
    }

}

