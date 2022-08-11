<?php 

namespace Schorn\controller;

//esse use esta com defeito
use Schorn\controller\inheritance\Controller;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

use Nyholm\Psr7\Response;


class MainPageController implements RequestHandlerInterface
{

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $PostVetor = $request->getParsedBody();
        $login = "TCC";
        $password = "123";
        if ($PostVetor['login'] == $login) {
            if ($PostVetor['password'] == $password) {
                echo "Logado com sucesso!";
                $bodyHTTP = $this->getHTTPBodyBuffer("/main_page/main_page.html");
            }else {
                $bodyHTTP = $this->getHTTPBodyBuffer("/login/login.html");
                echo "Senha incorreta!!";
            }
        }else{
            $bodyHTTP = $this->getHTTPBodyBuffer("/login/login.html");
            echo "Login incorreto!!";
        }
        $reponse = new Response(200,[], "<h1>oi</h1>");
        return $reponse;
    }
}