<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/calendar' => [[['_route' => 'app_calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'app_calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/familia/tutor' => [[['_route' => 'showTutores', '_controller' => 'App\\Controller\\FamiliaController::listadoTutoria'], null, null, null, false, false, null]],
        '/familia/tutor/Tutoría' => [[['_route' => 'tutoria', '_controller' => 'App\\Controller\\FamiliaController::indexTutoria'], null, null, null, false, false, null]],
        '/familia/orientador' => [[['_route' => 'showOrientacion', '_controller' => 'App\\Controller\\FamiliaController::listadoOrientacion'], null, null, null, false, false, null]],
        '/familia/orientador/Orientación' => [[['_route' => 'orientacion', '_controller' => 'App\\Controller\\FamiliaController::indexOrientacion'], null, null, null, false, false, null]],
        '/familia/secretario' => [[['_route' => 'showSecretaria', '_controller' => 'App\\Controller\\FamiliaController::listadoSecretaria'], null, null, null, false, false, null]],
        '/familia/secretario/Secretaría' => [[['_route' => 'secretaria', '_controller' => 'App\\Controller\\FamiliaController::indexSecretaria'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/plantilla' => [[['_route' => 'plantilla', '_controller' => 'App\\Controller\\MainController::indexPlantilla'], null, null, null, false, false, null]],
        '/familia' => [[['_route' => 'familia', '_controller' => 'App\\Controller\\MainController::indexFamilia'], null, null, null, false, false, null]],
        '/añadir_citas' => [[['_route' => 'aniadir_citas', '_controller' => 'App\\Controller\\PlantillaController::addCitas'], null, null, null, false, false, null]],
        '/miscitas' => [[['_route' => 'misCitas', '_controller' => 'App\\Controller\\PlantillaController::misCitas'], null, null, null, false, false, null]],
        '/addUser' => [[['_route' => 'addUser', '_controller' => 'App\\Controller\\PlantillaController::addAdminUser'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|pi/([^/]++)/edit(*:28)'
                    .'|nular/([^/]++)(*:49)'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:78)'
                    .'|/edit(*:90)'
                    .'|(*:97)'
                .')'
                .'|/familia/(?'
                    .'|tutor/Tutoría/(?'
                        .'|([^/]++)(*:143)'
                        .'|consulta/([^/]++)(*:168)'
                    .')'
                    .'|orientador/Orientación/(?'
                        .'|([^/]++)(*:212)'
                        .'|consulta/([^/]++)(*:237)'
                    .')'
                    .'|secretario/Secretaría/(?'
                        .'|([^/]++)(*:280)'
                        .'|consulta/([^/]++)(*:305)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:346)'
                    .'|wdt/([^/]++)(*:366)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:412)'
                            .'|router(*:426)'
                            .'|exception(?'
                                .'|(*:446)'
                                .'|\\.css(*:459)'
                            .')'
                        .')'
                        .'|(*:469)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        49 => [[['_route' => 'anular', '_controller' => 'App\\Controller\\FamiliaController::anular'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'app_calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'app_calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        143 => [[['_route' => 'tutoria_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaTutoria'], ['id'], null, null, false, true, null]],
        168 => [[['_route' => 'cita_consulta_tutoria', '_controller' => 'App\\Controller\\FamiliaController::consultasTutoria'], ['username'], null, null, false, true, null]],
        212 => [[['_route' => 'orientación_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaOrientación'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'consulta_orientación', '_controller' => 'App\\Controller\\FamiliaController::consultasOrientación'], ['username'], null, null, false, true, null]],
        280 => [[['_route' => 'secretaria_reserva', '_controller' => 'App\\Controller\\FamiliaController::reservaSecretaria'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'cita_consulta_secretaria', '_controller' => 'App\\Controller\\FamiliaController::consultasSecretaria'], ['username'], null, null, false, true, null]],
        346 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        366 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        412 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        426 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        446 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        459 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        469 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
