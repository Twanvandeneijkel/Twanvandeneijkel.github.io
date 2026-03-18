<?php

namespace App\Controllers;

use Framework\Response;
use Framework\ResponseFactory;

class BlogController
{
    private ResponseFactory $responseFactory;
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }
    public function index(): Response
    {
        return $this->responseFactory->view('blogs/index.html.twig');
    }
    public function ict(): Response
    {
        return $this->responseFactory->view('blogs/ict-dagelijks-leven.html.twig');
    }
    public function program(): Response
    {
        return $this->responseFactory->view('blogs/program-experience.html.twig');
    }
    public function study(): Response
    {
        return $this->responseFactory->view('blogs/studie-keuze.html.twig');
    }

    public function studyV2(): Response
    {
        return $this->responseFactory->view('blogs/studie-keuze-part2.html.twig');
    }
    public function swot(): Response
    {
        return $this->responseFactory->view('blogs/swot.html.twig');
    }
}
