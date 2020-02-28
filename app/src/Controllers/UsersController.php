<?php

namespace App\Controllers;

use PM\Framework\CrudController;

class UsersController extends CrudController
{   
    protected function getModel() :string
    {
        return "users_model";
    }
}