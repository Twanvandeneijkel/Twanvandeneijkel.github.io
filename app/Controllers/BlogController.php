<?php

namespace App\Controllers;

use App\ResponseFactory;
use Framework\Response;

class BlogController
{
    private ResponseFactory $responseFactory;

    public function __construct($responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        return $this->responseFactory->view("blog.html.twig");
    }

    public function ict(): Response
    {
        return $this->responseFactory->view("blogs/ict-dagelijks-leven.html.twig");
    }

    public function program(): Response
    {
        return $this->responseFactory->view("blogs/program-experience.html.twig");
    }

    public function study(): Response
    {
        return $this->responseFactory->view("blogs/studie-keuze.html.twig");
    }

    public function swot(): Response
    {
        return $this->responseFactory->view("blogs/swot.html.twig");
    }

}
