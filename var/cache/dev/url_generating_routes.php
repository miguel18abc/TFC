<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'prueba' => [[], ['_controller' => 'App\\Controller\\CitaController::indexAction'], [], [['text', '/prueba']], [], [], []],
    'crear' => [[], ['_controller' => 'App\\Controller\\CitaController::createAction'], [], [['text', '/prueba/create']], [], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\CitaController::updateAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/prueba/update']], [], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\CitaController::deleteAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/prueba/delete']], [], [], []],
    'orientacion' => [[], ['_controller' => 'App\\Controller\\FamiliaController::indexOrientacion'], [], [['text', '/familia/orientacion']], [], [], []],
    'secretaria' => [[], ['_controller' => 'App\\Controller\\FamiliaController::indexSecretaria'], [], [['text', '/familia/secretaria']], [], [], []],
    'tutoria' => [[], ['_controller' => 'App\\Controller\\FamiliaController::indexTutoria'], [], [['text', '/familia/tutoria']], [], [], []],
    'cita_listado' => [[], ['_controller' => 'App\\Controller\\FamiliaController::listado'], [], [['text', '/listado']], [], [], []],
    'reserva' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::reserva'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reserva']], [], [], []],
    'cita_consulta' => [[], ['_controller' => 'App\\Controller\\FamiliaController::consulta'], [], [['text', '/consulta']], [], [], []],
    'anular_cita' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::anular_cita'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cita/anular']], [], [], []],
    'anular' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::anular'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/anular']], [], [], []],
    'cita_anulacion' => [['id'], ['_controller' => 'App\\Controller\\FamiliaController::anulacion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/anulacion']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'alumnado' => [[], ['_controller' => 'App\\Controller\\MainController::indexAlumnado'], [], [['text', '/alumnado']], [], [], []],
    'plantilla' => [[], ['_controller' => 'App\\Controller\\MainController::indexPlantilla'], [], [['text', '/plantilla']], [], [], []],
    'familia' => [[], ['_controller' => 'App\\Controller\\MainController::indexFamilia'], [], [['text', '/familia']], [], [], []],
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
