<?php

namespace App\Controllers;

use App\Models\Blog;
use App\Repositories\BlogRepositoryInterface;
use Framework\Request;
use Framework\Response;
use Framework\ResponseFactory;

class BlogController
{
    private ResponseFactory $responseFactory;
    private BlogRepositoryInterface $blogRepository;

    public function __construct(ResponseFactory $responseFactory, BlogRepositoryInterface $blogRepository)
    {
        $this->responseFactory = $responseFactory;
        $this->blogRepository = $blogRepository;
    }

    public function index(): Response
    {
        $blogs = $this->blogRepository->all();
        return $this->responseFactory->view('blogs/index.html.twig', ['blogs' => $blogs]);
    }

    public function show(Request $request): Response
    {
        $id = (int) $request->get('id');
        $blog = $this->blogRepository->findById($id);

        if ($blog === null) {
            return $this->responseFactory->view('404.html.twig');
        }

        return $this->responseFactory->view('blogs/show.html.twig', ['blog' => $blog]);
    }

    public function edit(Request $request): Response
    {
        $id = (int) $request->get('id');
        $blog = $this->blogRepository->findById($id);

        if ($blog === null) {
            return $this->responseFactory->view('404.html.twig');
        }

        return $this->responseFactory->view('blogs/edit.html.twig', ['blog' => $blog]);
    }

    public function create(): Response
    {
        return $this->responseFactory->view('blogs/create.html.twig');
    }

    public function update(Request $request): Response
    {
        $id = (int) $request->get('id');
        $blog = $this->blogRepository->findById($id);

        if ($blog === null) {
            return $this->responseFactory->view('404.html.twig');
        }

        $blog->title = $request->get('title') ?? $blog->title;
        $blog->content = $request->get('content') ?? $blog->content;
        $blog->image = $request->get('image') ?? $blog->image;
        $blog->summary = $request->get('summary') ?? $blog->summary;

        $this->blogRepository->update($blog);

        return $this->responseFactory->redirect('/blogs/' . $id);
    }

    public function store(Request $request): Response
    {
        $blog = new Blog();
        $blog->title = $request->get('title') ?? '';
        $blog->content = $request->get('content') ?? '';
        $blog->image = $request->get('image') ?? '';
        $blog->summary = $request->get('summary') ?? '';

        $blog = $this->blogRepository->insert($blog);

        return $this->responseFactory->redirect('/blogs/' . $blog->id);
    }

    public function delete(Request $request): Response
    {
        $id = (int) $request->get('id');
        $this->blogRepository->delete($id);
        return $this->responseFactory->redirect('/blog');
    }
}