<?php

namespace App;

use App\Controllers\BlogController;
use App\Controllers\HomeController;
use Exception;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(ServiceContainer $serviceContainer): void
    {
        $responseFactory = $serviceContainer->get(ResponseFactory::class);
        $homeController = new HomeController($responseFactory);
        $serviceContainer->set(HomeController::class, $homeController);

        $taskController = new BlogController($responseFactory);
        $serviceContainer->set(BlogController::class, $taskController);
    }
}
