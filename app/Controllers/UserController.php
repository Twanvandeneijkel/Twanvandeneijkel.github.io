<?php

namespace App\Controllers;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use App\Services\AuthService;
use Framework\Request;
use Framework\Response;
use Framework\ResponseFactory;

class UserController
{
    private ResponseFactory $responseFactory;
    private AuthService $authService;
    private UserRepositoryInterface $userRepository;

    public function __construct(ResponseFactory $responseFactory, AuthService $authService, UserRepositoryInterface $userRepository)
    {
        $this->responseFactory = $responseFactory;
        $this->authService = $authService;
        $this->userRepository = $userRepository;
    }

    public function registerForm(): Response
    {
        return $this->responseFactory->view('users/register.html.twig');
    }

    public function loginForm(): Response
    {
        return $this->responseFactory->view('users/login.html.twig');
    }

    public function register(Request $request): Response
    {
        $username = (string)$request->get('username');

        $user = $this->userRepository->findByUsername($username);

        if ($user != null) {
            // This user already exists
        }

        $user = new User();
        $user->name = $request->get('name');
        $user->username = $username;
        $password = $request->get('password');
        $user->password = $this->authService->hashPassword($password);
        $user->role = $request->get('role');

        $savedUser = $this->authService->register($user, $user->password);

        return $this->responseFactory->redirect('/login');
    }

    public function login(Request $request): Response
    {
        $username = $request->get('username');
        $password = $this->authService->hashPassword($request->get('password'));
        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $this->authService->verifyUser($user);

        $this->authService->login($username, $password);


        return $this->responseFactory->redirect('/');
    }
}
