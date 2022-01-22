<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/genres' => [[['_route' => 'genres', '_controller' => 'App\\Controller\\HomeController::genres'], null, null, null, false, false, null]],
        '/auteurs' => [[['_route' => 'auteurs', '_controller' => 'App\\Controller\\HomeController::auteurs'], null, null, null, false, false, null]],
        '/rechercher' => [[['_route' => 'rechercher', '_controller' => 'App\\Controller\\HomeController::rechercher'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/users/delete/([^/]++)(*:35)'
                .'|/show/([^/]++)(*:56)'
                .'|/livre/liste\\-(?'
                    .'|entre\\-deux\\-dates/([^/]++)/([^/]++)(*:116)'
                    .'|par\\-(?'
                        .'|note/([^/]++)(*:145)'
                        .'|date/([^/]++)(*:166)'
                        .'|auteur/([^/]++)(*:189)'
                        .'|genre/([^/]++)(*:211)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:249)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        116 => [[['_route' => 'app_home_listeentredeuxdates', '_controller' => 'App\\Controller\\HomeController::listeEntreDeuxDates'], ['dateMin', 'dateMax'], null, null, false, true, null]],
        145 => [[['_route' => 'livre_list_by_note', '_controller' => 'App\\Controller\\HomeController::listByNote'], ['note'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'livre_list_by_date', '_controller' => 'App\\Controller\\HomeController::listByDate'], ['date'], ['GET' => 0], null, true, true, null]],
        189 => [[['_route' => 'livre_list_by_auteur', '_controller' => 'App\\Controller\\HomeController::listByAuteur'], ['auteur'], ['GET' => 0], null, true, true, null]],
        211 => [[['_route' => 'livre_list_by_genre', '_controller' => 'App\\Controller\\HomeController::listByGenre'], ['genre'], ['GET' => 0], null, true, true, null]],
        249 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
