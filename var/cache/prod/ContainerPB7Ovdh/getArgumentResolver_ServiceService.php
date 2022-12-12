<?php

namespace ContainerPB7Ovdh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ApiController::majEvent' => ['privates', '.service_locator.fGVYGWY', 'get_ServiceLocator_FGVYGWYService', true],
            'App\\Controller\\CalendarController::delete' => ['privates', '.service_locator.F_YhoRh', 'get_ServiceLocator_FYhoRhService', true],
            'App\\Controller\\CalendarController::edit' => ['privates', '.service_locator.F_YhoRh', 'get_ServiceLocator_FYhoRhService', true],
            'App\\Controller\\CalendarController::index' => ['privates', '.service_locator.F_DYhqA', 'get_ServiceLocator_FDYhqAService', true],
            'App\\Controller\\CalendarController::new' => ['privates', '.service_locator.F_DYhqA', 'get_ServiceLocator_FDYhqAService', true],
            'App\\Controller\\CalendarController::show' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\FamiliaController::anular' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\FamiliaController::consultasOrientación' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController::consultasSecretaria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController::consultasTutoria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController::indexOrientacion' => ['privates', '.service_locator.955E.cy', 'get_ServiceLocator_955E_CyService', true],
            'App\\Controller\\FamiliaController::indexSecretaria' => ['privates', '.service_locator.955E.cy', 'get_ServiceLocator_955E_CyService', true],
            'App\\Controller\\FamiliaController::indexTutoria' => ['privates', '.service_locator.955E.cy', 'get_ServiceLocator_955E_CyService', true],
            'App\\Controller\\FamiliaController::menuFamilias' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\FamiliaController::reservaOrientación' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController::reservaSecretaria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController::reservaTutoria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\PlantillaController::addAdminUser' => ['privates', '.service_locator.zOd_Aw6', 'get_ServiceLocator_ZOdAw6Service', true],
            'App\\Controller\\PlantillaController::addCitas' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\PlantillaController::misCitas' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ApiController:majEvent' => ['privates', '.service_locator.fGVYGWY', 'get_ServiceLocator_FGVYGWYService', true],
            'App\\Controller\\CalendarController:delete' => ['privates', '.service_locator.F_YhoRh', 'get_ServiceLocator_FYhoRhService', true],
            'App\\Controller\\CalendarController:edit' => ['privates', '.service_locator.F_YhoRh', 'get_ServiceLocator_FYhoRhService', true],
            'App\\Controller\\CalendarController:index' => ['privates', '.service_locator.F_DYhqA', 'get_ServiceLocator_FDYhqAService', true],
            'App\\Controller\\CalendarController:new' => ['privates', '.service_locator.F_DYhqA', 'get_ServiceLocator_FDYhqAService', true],
            'App\\Controller\\CalendarController:show' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\FamiliaController:anular' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\FamiliaController:consultasOrientación' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController:consultasSecretaria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController:consultasTutoria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController:indexOrientacion' => ['privates', '.service_locator.955E.cy', 'get_ServiceLocator_955E_CyService', true],
            'App\\Controller\\FamiliaController:indexSecretaria' => ['privates', '.service_locator.955E.cy', 'get_ServiceLocator_955E_CyService', true],
            'App\\Controller\\FamiliaController:indexTutoria' => ['privates', '.service_locator.955E.cy', 'get_ServiceLocator_955E_CyService', true],
            'App\\Controller\\FamiliaController:menuFamilias' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\FamiliaController:reservaOrientación' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController:reservaSecretaria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\FamiliaController:reservaTutoria' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\PlantillaController:addAdminUser' => ['privates', '.service_locator.zOd_Aw6', 'get_ServiceLocator_ZOdAw6Service', true],
            'App\\Controller\\PlantillaController:addCitas' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\PlantillaController:misCitas' => ['privates', '.service_locator.PbFLIDh', 'get_ServiceLocator_PbFLIDhService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ApiController::majEvent' => '?',
            'App\\Controller\\CalendarController::delete' => '?',
            'App\\Controller\\CalendarController::edit' => '?',
            'App\\Controller\\CalendarController::index' => '?',
            'App\\Controller\\CalendarController::new' => '?',
            'App\\Controller\\CalendarController::show' => '?',
            'App\\Controller\\FamiliaController::anular' => '?',
            'App\\Controller\\FamiliaController::consultasOrientación' => '?',
            'App\\Controller\\FamiliaController::consultasSecretaria' => '?',
            'App\\Controller\\FamiliaController::consultasTutoria' => '?',
            'App\\Controller\\FamiliaController::indexOrientacion' => '?',
            'App\\Controller\\FamiliaController::indexSecretaria' => '?',
            'App\\Controller\\FamiliaController::indexTutoria' => '?',
            'App\\Controller\\FamiliaController::menuFamilias' => '?',
            'App\\Controller\\FamiliaController::reservaOrientación' => '?',
            'App\\Controller\\FamiliaController::reservaSecretaria' => '?',
            'App\\Controller\\FamiliaController::reservaTutoria' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\PlantillaController::addAdminUser' => '?',
            'App\\Controller\\PlantillaController::addCitas' => '?',
            'App\\Controller\\PlantillaController::misCitas' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ApiController:majEvent' => '?',
            'App\\Controller\\CalendarController:delete' => '?',
            'App\\Controller\\CalendarController:edit' => '?',
            'App\\Controller\\CalendarController:index' => '?',
            'App\\Controller\\CalendarController:new' => '?',
            'App\\Controller\\CalendarController:show' => '?',
            'App\\Controller\\FamiliaController:anular' => '?',
            'App\\Controller\\FamiliaController:consultasOrientación' => '?',
            'App\\Controller\\FamiliaController:consultasSecretaria' => '?',
            'App\\Controller\\FamiliaController:consultasTutoria' => '?',
            'App\\Controller\\FamiliaController:indexOrientacion' => '?',
            'App\\Controller\\FamiliaController:indexSecretaria' => '?',
            'App\\Controller\\FamiliaController:indexTutoria' => '?',
            'App\\Controller\\FamiliaController:menuFamilias' => '?',
            'App\\Controller\\FamiliaController:reservaOrientación' => '?',
            'App\\Controller\\FamiliaController:reservaSecretaria' => '?',
            'App\\Controller\\FamiliaController:reservaTutoria' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\PlantillaController:addAdminUser' => '?',
            'App\\Controller\\PlantillaController:addCitas' => '?',
            'App\\Controller\\PlantillaController:misCitas' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
