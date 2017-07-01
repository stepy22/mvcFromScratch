<?php
class index extends controller {
    function __construct()
    {
        parent::__construct();
        echo "we are in index";
        $this->view->msg="Hello you are welcome";

        $this->view->render('index/index');
    }
}