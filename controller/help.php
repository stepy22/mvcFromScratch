<?php

class help extends controller {
    function __construct()
    {
        parent::__construct();
    }
    public function other($arg=false){
        require 'models/help_model.php';
        $model= new help_model();
    }
}
