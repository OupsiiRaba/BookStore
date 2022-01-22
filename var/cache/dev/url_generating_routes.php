<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_delete_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users/delete']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'show' => [['id'], ['_controller' => 'App\\Controller\\HomeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show']], [], [], []],
    'genres' => [[], ['_controller' => 'App\\Controller\\HomeController::genres'], [], [['text', '/genres']], [], [], []],
    'auteurs' => [[], ['_controller' => 'App\\Controller\\HomeController::auteurs'], [], [['text', '/auteurs']], [], [], []],
    'rechercher' => [[], ['_controller' => 'App\\Controller\\HomeController::rechercher'], [], [['text', '/rechercher']], [], [], []],
    'app_home_listeentredeuxdates' => [['dateMin', 'dateMax'], ['_controller' => 'App\\Controller\\HomeController::listeEntreDeuxDates'], [], [['variable', '/', '[^/]++', 'dateMax', true], ['variable', '/', '[^/]++', 'dateMin', true], ['text', '/livre/liste-entre-deux-dates']], [], [], []],
    'livre_list_by_note' => [['note'], ['_controller' => 'App\\Controller\\HomeController::listByNote'], [], [['variable', '/', '[^/]++', 'note', true], ['text', '/livre/liste-par-note']], [], [], []],
    'livre_list_by_date' => [['date'], ['_controller' => 'App\\Controller\\HomeController::listByDate'], [], [['text', '/'], ['variable', '/', '[^/]++', 'date', true], ['text', '/livre/liste-par-date']], [], [], []],
    'livre_list_by_auteur' => [['auteur'], ['_controller' => 'App\\Controller\\HomeController::listByAuteur'], [], [['text', '/'], ['variable', '/', '[^/]++', 'auteur', true], ['text', '/livre/liste-par-auteur']], [], [], []],
    'livre_list_by_genre' => [['genre'], ['_controller' => 'App\\Controller\\HomeController::listByGenre'], [], [['text', '/'], ['variable', '/', '[^/]++', 'genre', true], ['text', '/livre/liste-par-genre']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
