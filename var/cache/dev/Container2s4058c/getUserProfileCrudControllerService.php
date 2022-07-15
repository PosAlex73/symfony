<?php

namespace Container2s4058c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserProfileCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\UserProfileCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\UserProfileCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/UserProfileCrudController.php';

        $container->services['App\\Controller\\Admin\\UserProfileCrudController'] = $instance = new \App\Controller\Admin\UserProfileCrudController();

        $instance->setContainer(($container->privates['.service_locator.GymbEAg'] ?? $container->load('get_ServiceLocator_GymbEAgService'))->withContext('App\\Controller\\Admin\\UserProfileCrudController', $container));

        return $instance;
    }
}