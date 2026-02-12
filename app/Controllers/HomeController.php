<?php

namespace App\Controllers;

use App\ResponseFactory;
use Framework\Response;

class HomeController
{
    private ResponseFactory $responseFactory;

    public function __construct($responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        return $this->responseFactory->view("index.html.twig");
    }

    public function profile(): Response
    {
        return $this->responseFactory->view("profile.html.twig");
    }

    public function dashboard(): Response
    {
        return $this->responseFactory->view("dashboard.html.twig");
    }

    public function faq(): Response
    {
        return $this->responseFactory->view("faq.html.twig");
    }

    public function blog(): Response
    {
        return $this->responseFactory->view("blog.html.twig");
    }
}
