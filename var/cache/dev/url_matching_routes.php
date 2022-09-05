<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/prueba' => [[['_route' => 'prueba', '_controller' => 'App\\Controller\\CitaController::indexAction'], null, null, null, false, false, null]],
        '/prueba/create' => [[['_route' => 'crear', '_controller' => 'App\\Controller\\CitaController::createAction'], null, null, null, false, false, null]],
        '/familia/orientacion' => [[['_route' => 'orientacion', '_controller' => 'App\\Controller\\FamiliaController::indexOrientacion'], null, null, null, false, false, null]],
        '/familia/secretaria' => [[['_route' => 'secretaria', '_controller' => 'App\\Controller\\FamiliaController::indexSecretaria'], null, null, null, false, false, null]],
        '/familia/tutoria' => [[['_route' => 'tutoria', '_controller' => 'App\\Controller\\FamiliaController::indexTutoria'], null, null, null, false, false, null]],
        '/listado' => [[['_route' => 'cita_listado', '_controller' => 'App\\Controller\\FamiliaController::listado'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/alumnado' => [[['_route' => 'alumnado', '_controller' => 'App\\Controller\\MainController::indexAlumnado'], null, null, null, false, false, null]],
        '/plantilla' => [[['_route' => 'plantilla', '_controller' => 'App\\Controller\\MainController::indexPlantilla'], null, null, null, false, false, null]],
        '/familia' => [[['_route' => 'familia', '_controller' => 'App\\Controller\\MainController::indexFamilia'], null, null, null, false, false, null]],
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
                .'|/prueba/(?'
                    .'|update/([^/]++)(*:33)'
                    .'|delete/([^/]++)(*:55)'
                .')'
                .'|/familia/tutoria/([^/]++)(*:88)'
                .'|/c(?'
                    .'|onsulta/(?'
                        .'|orientacion/([^/]++)(*:131)'
                        .'|secretaria/([^/]++)(*:158)'
                        .'|tutoria/([^/]++)(*:182)'
                    .')'
                    .'|ita/anular/([^/]++)(*:210)'
                .')'
                .'|/reserva/([^/]++)(*:236)'
                .'|/anula(?'
                    .'|r/([^/]++)(*:263)'
                    .'|cion/([^/]++)(*:284)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:324)'
                    .'|wdt/([^/]++)(*:344)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:390)'
                            .'|router(*:404)'
                            .'|exception(?'
                                .'|(*:424)'
                                .'|\\.css(*:437)'
                            .')'
                        .')'
                        .'|(*:447)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'update', '_controller' => 'App\\Controller\\CitaController::updateAction'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\CitaController::deleteAction'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'tutoria_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaTutoria'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'cita_consulta_orientacion', '_controller' => 'App\\Controller\\FamiliaController::consultasOrientacion'], ['username'], null, null, false, true, null]],
        158 => [[['_route' => 'cita_consulta_secretaria', '_controller' => 'App\\Controller\\FamiliaController::consultasSecretaria'], ['username'], null, null, false, true, null]],
        182 => [[['_route' => 'cita_consulta_tutoria', '_controller' => 'App\\Controller\\FamiliaController::consultasTutoria'], ['username'], null, null, false, true, null]],
        210 => [[['_route' => 'anular_cita', '_controller' => 'App\\Controller\\FamiliaController::anular_cita'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'reserva', '_controller' => 'App\\Controller\\FamiliaController::reserva'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'anular', '_controller' => 'App\\Controller\\FamiliaController::anular'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'cita_anulacion', '_controller' => 'App\\Controller\\FamiliaController::anulacion'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        344 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        390 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        404 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        424 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        437 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        447 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
