<?php

/**
 * GET
 */
$router->namespace("Modules\Base\Controllers");
$router->group(null);
$router->get("/", "WebController:home", "web.home");
$router->get("/sobre", "WebController:about", "web.about");

/**
 * POST
 */
