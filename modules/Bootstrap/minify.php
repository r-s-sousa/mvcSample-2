<?php

use MatthiasMullie\Minify;

if($_SERVER['SERVER_NAME'] == 'localhost' && $_ENV['MINIFY'] == 'true'){
   $minifierCSS = new Minify\CSS();
   $minifierCSS->add(dirname(__DIR__)."/public/assets/vendor/bootstrap/css/bootstrap.min.css");
   $minifierCSS->add(dirname(__DIR__)."/public/assets/css/style.css");
   
   $minifierJS = new Minify\JS();
   $minifierJS->add(dirname(__DIR__)."/public/assets/vendor/bootstrap/js/jquery-3.6.0.min.js");
   $minifierJS->add(dirname(__DIR__)."/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
   $minifierJS->add(dirname(__DIR__)."/public/assets/js/scripts.js");

   // Save minified files to disk
   $minifierCSS->minify(dirname(__DIR__)."/public/assets/vendor/minify/style.css");
   $minifierJS->minify(dirname(__DIR__)."/public/assets/vendor/minify/scripts.js");

   // mata a aplicação
   die('terminou');  
}
