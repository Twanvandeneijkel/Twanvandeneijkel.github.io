<?php

namespace App;

use App\Controllers\BlogController;
use App\Controllers\GradeController;
use App\Controllers\HomeController;
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
        $router->addRoute('GET', '/blogs/ict-dagelijks-leven', [$blogController, 'ict']);
        $router->addRoute('GET', '/blogs/program-experience', [$blogController, 'program']);
        $router->addRoute('GET', '/blogs/studie-keuze', [$blogController, 'study']);
        $router->addRoute('GET', '/blogs/studie-keuze-part2', [$blogController, 'studyV2']);
        $router->addRoute('GET', '/blogs/swot', [$blogController, 'swot']);

        $gradeController = $container->get(GradeController::class);
        $router->addRoute('GET', '/dashboard', [$gradeController, 'index']);
    }
}
