<?php

namespace Modules\Base\Controllers;

use CoffeeCode\Router\Router;

/**
 * Controlador de errors
 */
class ErrorController extends Controller
{
   /**
    * Construtor do controlador de erros
    *
    * @param Router $router
    */
   public function __construct($router)
   {
      parent::__construct($router);
      parent::setViewFolder(dirname(__DIR__)."/Views");
   }

   /**
    * Página incial
    *
    * @return void
    */
   public function Error($data): void
   {
      echo $this->view->render("error", [
         'title' => "Error {$data['errcode']} | " . SITE,
         'error' => $data['errcode']
      ]);
   }
}
