<?php

namespace App\Controllers;

use App\ResponseFactory;
use Framework\Response;

class HomeController
{
  private ResponseFactory $responseFactory;

  public function __construct($responseFactory) {
    $this->responseFactory = $responseFactory;
  }
  public function index(): Response
  {
    return $this->responseFactory->view("index.html.twig");
  }

  public function about(): Response
  {
    return $this->responseFactory->view("about.html.twig");
  }
}
