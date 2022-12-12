<?php

namespace ContainerPB7Ovdh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_FactoryService extends App_KernelProdContainer
{
    /*
     * Gets the public '.container.private.form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.form.factory'] = new \Symfony\Component\Form\FormFactory(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')));
    }
}
