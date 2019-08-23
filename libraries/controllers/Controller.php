<?php

namespace Controllers;

abstract class controller 
{
    protected $model;
    protected $modelName;

    public function __construct()
    {
        $this->model = new $this->modelName();
    }
}