<?php

namespace Controllers;
use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $router->render('auth/login');
    }

    public static function logout(Router $router) {
        $router->render('auth/logout');
    }

    public static function olvide(Router $router) {
        $router->render('auth/olvide-pass');
    }

    public static function reestablecer(Router $router) {
        $router->render('auth/reestablecer');
    }

    public static function crear(Router $router) {
        $router->render('auth/crear-cuenta');
    }
}