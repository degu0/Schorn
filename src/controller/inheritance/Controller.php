<?php

namespace Schorn\controller\inheritance;

class Controller
{
    public function getHTTPBodyBuffer(String $viewPath, array $datas = [])
    {
        ob_start();
        extract($datas);
        require __DIR__ . '/../../view' . $viewPath;
        $bodyHTTP = ob_get_clean();
        return $bodyHTTP;
    }
}