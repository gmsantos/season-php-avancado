<?php

class Singleton{
    
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;
    
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }
    
    private function __construct()
    {
        
    }
    
}

$singleton = Singleton::getInstance();
$singleton->jujuba = '123';

var_dump($singleton);

$singleton2 = Singleton::getInstance();
$singleton2->maca = '23';

$singleton3 = Singleton::getInstance();
$singleton3->user = 'abc';

$singleton4 = Singleton::getInstance();

var_dump($singleton4)


