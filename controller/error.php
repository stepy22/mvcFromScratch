<?php
class error extends controller{
    function __construct()
    {
        parent::__construct();
        echo "this is an error";
        $this->view->msg = "This page doesnt exist";
        $this->view->render('error/index');
    }
}
