<?php

namespace Schorn\controller;

use Schorn\controller\inheritance\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ErroController extends Controller implements RequestHandlerInterface
{
   public function handle(ServerRequestInterface $serverRequest): ResponseInterface
   {
      $bodyHTTP = $this->getHTTPBodyBuffer("/erro/Erro_404.php");
      $response = new Response(404, ["Serve" => "Schorn Server"], $bodyHTTP);
      return $response;
   }
}
