<?php

namespace App;

use App\Controllers\BlogController;
use App\Controllers\ExamController;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use Exception;
use Framework\RouteProviderInterface;
use Framework\Router;
use Framework\ServiceContainer;

class RouteProvider implements RouteProviderInterface
{
    /**
     * @param Router $router
     * @param ServiceContainer $container
     * @return void
     * @throws Exception
     */
    public function register(Router $router, ServiceContainer $container): void
    {
        $homeController = $container->get(HomeController::class);
        $router->addRoute('GET', '/', [$homeController, 'index']);
        $router->addRoute('GET', '/profile', [$homeController, 'profile']);
        $router->addRoute('GET', '/faq', [$homeController, 'faq']);

        $blogController = $container->get(BlogController::class);
        $router->addRoute('GET', '/blog', [$blogController, 'index']);
        $router->addRoute('GET', '/blog/create', [$blogController, 'create']);
        $router->addRoute('POST', '/blog/create', [$blogController, 'store']);
        $router->addRoute('GET', '/blogs/(?<id>[1-9]\d*)', [$blogController, 'show']);
        $router->addRoute('GET', '/blogs/(?<id>[1-9]\d*)/edit', [$blogController, 'edit']);
        $router->addRoute('POST', '/blogs/(?<id>[1-9]\d*)/update', [$blogController, 'update']);
        $router->addRoute('POST', '/blogs/(?<id>[1-9]\d*)/delete', [$blogController, 'delete']);

        $examController = $container->get(ExamController::class);
        $router->addRoute('GET', '/dashboard', [$examController, 'index']);
        $router->addRoute('GET', '/dashboard/edit', [$examController, 'edit']);

        $router->addRoute('POST', '/dashboard/update', [$examController, 'update']);

        $userController = $container->get(UserController::class);
        $router->addRoute('GET', '/register', [$userController, 'registerForm']);
        $router->addRoute('GET', '/login', [$userController, 'loginForm']);
        $router->addRoute('POST', '/register', [$userController, 'register']);
        $router->addRoute('POST', '/login', [$userController, 'login']);
    }
}
