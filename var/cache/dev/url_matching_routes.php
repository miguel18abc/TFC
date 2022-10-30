<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/familia/Tutoría' => [[['_route' => 'tutoria', '_controller' => 'App\\Controller\\FamiliaController::indexTutoria'], null, null, null, false, false, null]],
        '/familia/Orientación' => [[['_route' => 'orientacion', '_controller' => 'App\\Controller\\FamiliaController::indexOrientacion'], null, null, null, false, false, null]],
        '/familia/Secretaría' => [[['_route' => 'secretaria', '_controller' => 'App\\Controller\\FamiliaController::indexSecretaria'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/plantilla' => [[['_route' => 'plantilla', '_controller' => 'App\\Controller\\MainController::indexPlantilla'], null, null, null, false, false, null]],
        '/familia' => [[['_route' => 'familia', '_controller' => 'App\\Controller\\MainController::indexFamilia'], null, null, null, false, false, null]],
        '/añadir_citas' => [[['_route' => 'aniadir_citas', '_controller' => 'App\\Controller\\PlantillaController::addCitas'], null, null, null, false, false, null]],
        '/miscitas' => [[['_route' => 'misCitas', '_controller' => 'App\\Controller\\PlantillaController::misCitas'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/anular/([^/]++)(*:23)'
                .'|/familia/(?'
                    .'|Tutoría/([^/]++)(*:59)'
                    .'|Orientación/([^/]++)(*:87)'
                    .'|Secretaría/([^/]++)(*:114)'
                .')'
                .'|/consulta/(?'
                    .'|Tutoría/([^/]++)(*:153)'
                    .'|Orientación/([^/]++)(*:182)'
                    .'|Secretaría/([^/]++)(*:210)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:250)'
                    .'|wdt/([^/]++)(*:270)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:316)'
                            .'|router(*:330)'
                            .'|exception(?'
                                .'|(*:350)'
                                .'|\\.css(*:363)'
                            .')'
                        .')'
                        .'|(*:373)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'anular', '_controller' => 'App\\Controller\\FamiliaController::anular'], ['id'], null, null, false, true, null]],
        59 => [[['_route' => 'tutoria_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaTutoria'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'orientacion_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaOrientacion'], ['id'], null, null, false, true, null]],
        114 => [[['_route' => 'secretaria_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaSecretaria'], ['id'], null, null, false, true, null]],
        153 => [[['_route' => 'cita_consulta_tutoria', '_controller' => 'App\\Controller\\FamiliaController::consultasTutoria'], ['username'], null, null, false, true, null]],
        182 => [[['_route' => 'cita_consulta_orientacion', '_controller' => 'App\\Controller\\FamiliaController::consultasOrientacion'], ['username'], null, null, false, true, null]],
        210 => [[['_route' => 'cita_consulta_secretaria', '_controller' => 'App\\Controller\\FamiliaController::consultasSecretaria'], ['username'], null, null, false, true, null]],
        250 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        270 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        316 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        330 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        350 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        363 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        373 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
