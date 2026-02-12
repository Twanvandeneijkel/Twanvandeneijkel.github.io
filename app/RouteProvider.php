<?php

namespace App;

use App\Controllers\BlogController;
use App\Controllers\HomeController;
use Exception;
use Framework\RouteProviderInterface;
use Framework\Router;
use Framework\ServiceContainer;

class RouteProvider implements RouteProviderInterface
{
    /**
     * @param Router $router
     * @param ServiceContainer $serviceContainer
     * @return void
     * @throws Exception
     */
    public function register(Router $router, ServiceContainer $serviceContainer): void
    {

        $homeController = $serviceContainer->get(HomeController::class);
        $router->addRoute('GET', '/', [$homeController, "index"]);
        $router->addRoute('GET', '/profile', [$homeController, "profile"]);
        $router->addRoute('GET', '/dashboard', [$homeController, "dashboard"]);
        $router->addRoute('GET', '/faq', [$homeController, "faq"]);
        $router->addRoute('GET', '/blog', [$homeController, "blog"]);

        $blogController = $serviceContainer->get(BlogController::class);
        $router->addRoute('GET', '/blogs', [$blogController, "index"]);
        $router->addRoute('GET', '/blogs/ict-dagelijks-leven', [$blogController, "ict"]);
        $router->addRoute('GET', '/blogs/program-experience', [$blogController, "program"]);
        $router->addRoute('GET', '/blogs/studie-keuze', [$blogController, "study"]);
        $router->addRoute('GET', '/blogs/swot', [$blogController, "swot"]);
    }
}
