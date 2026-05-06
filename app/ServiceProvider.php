<?php

namespace App;

use App\Controllers\BlogController;
use App\Controllers\ExamController;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Repositories\BlogRepository;
use App\Repositories\BlogRepositoryInterface;
use App\Repositories\ExamRepository;
use App\Repositories\ExamRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Services\AuthService;
use Exception;
use Framework\Database;
use Framework\ResponseFactory;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(ServiceContainer $container): void
    {
        $responseFactory = $container->get(ResponseFactory::class);
        $database = $container->get(Database::class);

        $homeController = new HomeController($responseFactory);
        $container->set(HomeController::class, $homeController);

        $examRepository = new ExamRepository($database);
        $container->set(ExamRepositoryInterface::class, $examRepository);

        $blogRepository = new BlogRepository($database);
        $container->set(BlogRepositoryInterface::class, $blogRepository);

        $userRepository = new UserRepository($database);
        $container->set(UserRepositoryInterface::class, $userRepository);

        $authService = new AuthService($userRepository);
        $container->set(AuthService::class, $authService);

        $blogController = new BlogController($responseFactory, $blogRepository);
        $container->set(BlogController::class, $blogController);

        $examController = new ExamController($responseFactory, $examRepository);
        $container->set(ExamController::class, $examController);

        $userController = new UserController($responseFactory, $authService, $userRepository);
        $container->set(UserController::class, $userController);
    }
}
