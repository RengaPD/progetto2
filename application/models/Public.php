<?php

class Application_Model_Public extends App_Model_Abstract
{

    public function __construct()
    {

    }

    public function registrati($info)
    {
        $this->getResource('Pubblico')->register($info);
    }
    
}