<?php
class login extends controller {
    function __construct()
    {
        parent::__construct();
        $this->view->msg="ovo je login Strana";

        $this->view->render('login/index');
    }
}