<?php

namespace Schorn\controller;

use Schorn\controller\inheritance\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ConstructController extends Controller implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $bodyHTTP = $this->getHTTPBodyBuffer("/make_the_schedule/Construct.php");
        $response = new Response(200, [], $bodyHTTP);
        return $response;
    }
}
