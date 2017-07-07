<?php

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('roles', ['uses'=> 'RoleController@all']);
$app->get('users', ['uses'=> 'UserController@all']);