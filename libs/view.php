<?php
class view {
    function __construct()
    {
    }
    public function render($name){
        require 'views/'. $name . '.php';
    }
}