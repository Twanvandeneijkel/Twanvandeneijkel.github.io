<?php

namespace App\Controllers;

use App\ResponseFactory;
use Framework\Response;

class TaskController
{
  private ResponseFactory $responseFactory;

  public function __construct($responseFactory)
  {
    $this->responseFactory = $responseFactory;
  }

  public function index(): Response
  {
    return $this->responseFactory->view("task.html.twig");
  }

  public function create(): Response
  {
    return $this->responseFactory->view("task/create.html.twig");
  }
}
