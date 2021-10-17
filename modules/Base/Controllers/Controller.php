<?php

namespace Modules\Base\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * Controlador base
 */
abstract class Controller
{
   /**
    * View do Plates
    *
    * @var Engine
    */
   protected $view;

   /**
    * Controlador de rotas do sistema
    *
    * @var Router
    */
   protected $router;
   
   /**
    * Construtor do controlador base
    *
    * @param Router $router
    */
   public function __construct(Router $router)
   {
      // SETA O OBJ ROUTER NA CLASSE
      $this->router = $router;
   }

   /**
    * Função responsável por definir as configurações da VIEW
    *
    * @param string $pathViews
    * @return void
    */
   public function setViewFolder(string $pathViews): void
   {
      // DEFINE A PASTA DOS THEMAS A SEREM RENDERIZADOS
      $this->view = new Engine($pathViews);

      // PASSA O OBJ CONTROLADOR DE ROTAS PARA TODOS TEMPLATES
      $this->view->addData(['router' => $this->router]);
   }

}
