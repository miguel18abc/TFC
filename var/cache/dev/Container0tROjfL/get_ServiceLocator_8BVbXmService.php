<?php

namespace Container0tROjfL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8BVbXmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8_BVbXm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8_BVbXm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendar' => ['privates', '.errored..service_locator.8_BVbXm.App\\Entity\\Calendar', NULL, 'Cannot autowire service ".service_locator.8_BVbXm": it references class "App\\Entity\\Calendar" but no such service exists.'],
        ], [
            'calendar' => 'App\\Entity\\Calendar',
        ]);
    }
}