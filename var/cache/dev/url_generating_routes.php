<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'anular' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::anular'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/anular']], [], [], []],
    'showTutores' => [[], ['_controller' => 'App\\Controller\\FamiliaController::listadoTutoria'], [], [['text', '/familia/tutor']], [], [], []],
    'tutoria' => [[], ['_controller' => 'App\\Controller\\FamiliaController::indexTutoria'], [], [['text', '/familia/Tutoría']], [], [], []],
    'tutoria_reserva' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::reservaTutoria'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/familia/Tutoría']], [], [], []],
    'cita_consulta_tutoria' => [['username'], ['_controller' => 'App\\Controller\\FamiliaController::consultasTutoria'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/consulta/Tutoría']], [], [], []],
    'orientacion' => [[], ['_controller' => 'App\\Controller\\FamiliaController::indexOrientacion'], [], [['text', '/familia/Orientación']], [], [], []],
    'orientacion_reserva' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::reservaOrientacion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/familia/Orientación']], [], [], []],
    'cita_consulta_orientacion' => [['username'], ['_controller' => 'App\\Controller\\FamiliaController::consultasOrientacion'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/consulta/Orientación']], [], [], []],
    'secretaria' => [[], ['_controller' => 'App\\Controller\\FamiliaController::indexSecretaria'], [], [['text', '/familia/Secretaría']], [], [], []],
    'secretaria_reserva' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::reservaSecretaria'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/familia/Secretaría']], [], [], []],
    'cita_consulta_secretaria' => [['username'], ['_controller' => 'App\\Controller\\FamiliaController::consultasSecretaria'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/consulta/Secretaría']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'plantilla' => [[], ['_controller' => 'App\\Controller\\MainController::indexPlantilla'], [], [['text', '/plantilla']], [], [], []],
    'familia' => [[], ['_controller' => 'App\\Controller\\MainController::indexFamilia'], [], [['text', '/familia']], [], [], []],
    'aniadir_citas' => [[], ['_controller' => 'App\\Controller\\PlantillaController::addCitas'], [], [['text', '/añadir_citas']], [], [], []],
    'misCitas' => [[], ['_controller' => 'App\\Controller\\PlantillaController::misCitas'], [], [['text', '/miscitas']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], [], []],
];
