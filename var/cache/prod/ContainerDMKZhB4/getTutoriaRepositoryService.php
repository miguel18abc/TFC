<?php

namespace ContainerDMKZhB4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTutoriaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TutoriaRepository' shared autowired service.
     *
     * @return \App\Repository\TutoriaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TutoriaRepository'] = new \App\Repository\TutoriaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
