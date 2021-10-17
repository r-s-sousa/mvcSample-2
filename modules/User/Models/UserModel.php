<?php

namespace Modules\User\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * DAO - User
 */
class UserModel extends DataLayer
{
   /**
    * Construtor do DAO User
    */
   public function __construct()
   {
      parent::__construct('usuarios', ['nome', 'email', 'password']);
   }
}
