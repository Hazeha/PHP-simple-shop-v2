<?php


class Session
{
    const SESSION_STARTED = true;
    const SESSION_NOT_STARTED = FALSE;

    private $sessionState = self::SESSION_NOT_STARTED;

    private static $instance;

    private function __construct(){}

    public static function getInstance(){
        if (!isset(self::$instance)){
            self::$instance = new self;
        }
        self::$instance->startSession();

        return self::$instance;
    }

    public function startSession(){
        if ($this->sessionState == self::SESSION_NOT_STARTED){
            $this->sessionState = session_start();
            $_SESSION['cart'] = array();
            array_push($_SESSION['cart'], '1','1', '2', '3');
        }
        return $this->sessionState;
    }
    public function init(){


    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }


}
