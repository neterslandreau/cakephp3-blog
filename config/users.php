<?php
$config = [
    'Users' => [
        'Email' => [
            'required' => true,
            'validate' => false,

        ],
        'Registration' => [

        ],
    ],
    'Auth' => [
        'loginAction' => [
            'plugin' => 'CakeDC/Users',
            'controller' => 'Users',
            'action' => 'login',
            'prefix' => false
        ],
        'authenticate' => [
            'all' => [
                'finder' => 'auth',
            ],
            'CakeDC/Users.ApiKey',
            'CakeDC/Users.RememberMe',
            'Form',
        ],
        'authorize' => [
            'CakeDC/Users.Superuser',
            'CakeDC/Users.SimpleRbac',
        ],
//        'authorize' => ['Controller'],
        'loginRedirect' => [
            'plugin' => false,
            'controller' => 'Articles',
            'action' => 'index'
        ],
        'logoutRedirect' => [
            'plugin' => false,
            'controller' => 'Articles',
            'action' => 'index'
        ],
        'authError' => 'You are not allowed to do that.'
    ],

];
return $config;