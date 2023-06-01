<?php

namespace App\Middleware;

class Middleware
{
    public function beforeHandleRequest()
    {
        $_SESSION['language'] = $_GET['language'];
    }
}
