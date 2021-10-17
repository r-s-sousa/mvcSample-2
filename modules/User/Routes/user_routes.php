<?php

/**
 * GET
 */
$router->namespace("Modules\User\Controllers");
$router->group('user');
$router->get("/", "UserController:user", "user.user");

/**
 * POST
 */
