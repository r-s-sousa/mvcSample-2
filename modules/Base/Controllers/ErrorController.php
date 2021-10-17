<?php

namespace Modules\Base\Controllers;

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
