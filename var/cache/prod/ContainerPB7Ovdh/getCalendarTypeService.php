<?php

namespace ContainerPB7Ovdh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CalendarType' shared autowired service.
     *
     * @return \App\Form\CalendarType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CalendarType'] = new \App\Form\CalendarType();
    }
}
