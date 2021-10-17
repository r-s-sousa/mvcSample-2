<?php

/**
 * GET
 */

$router->namespace("Modules\Base\Controllers");
$router->group("error");
$router->get("/{errcode}", "ErrorController:error", "error.error");


/**
 * POST
 */