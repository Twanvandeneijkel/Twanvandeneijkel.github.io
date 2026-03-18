<?php

namespace App\Controllers;

use Framework\Response;
use Framework\ResponseFactory;

class GradeController
{
    private ResponseFactory $responseFactory;
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }
    public function index(): Response
    {
        return $this->responseFactory->view('grades/index.html.twig');
    }
}
