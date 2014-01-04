<?php

class Account extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function login($param = null) {
        require 'models/account-model.php';
        $model = new AccountModel();
        
        $this->view->render("account/login");
    }

}