<?php

namespace ContainerSWxZ0Os;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFamiliaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FamiliaController' shared autowired service.
     *
     * @return \App\Controller\FamiliaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FamiliaController.php';

        $container->services['App\\Controller\\FamiliaController'] = $instance = new \App\Controller\FamiliaController(($container->privates['App\\Repository\\CitaRepository'] ?? $container->load('getCitaRepositoryService')), ($container->privates['App\\Repository\\ReservaRepository'] ?? $container->load('getReservaRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\FamiliaController', $container));

        return $instance;
    }
}
