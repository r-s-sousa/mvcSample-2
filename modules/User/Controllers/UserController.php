<?php

namespace Modules\User\Controllers;

use CoffeeCode\Router\Router;
use Modules\Base\Controllers\Controller;

/**
 * Controlador do módulo usuário
 */
class UserController extends Controller
{
   /**
    * Construtor do módulo usuário
    *
    * @param Router $router
    */
   public function __construct(Router $router)
   {
      parent::__construct($router);
      parent::setViewFolder(dirname(__DIR__)."/Views");
   }

   /**
    * Método de teste pra saber se está funcionando
    *
    * @return void
    */
   public function user(): void
   {
      echo $this->view->render('teste');
   }
}