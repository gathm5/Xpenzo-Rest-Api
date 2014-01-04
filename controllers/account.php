<?php

class Account extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

    }

    public function login() {
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == true) {
            header('location: /dashboard');
            exit;
        }
        $this->view->render("account/login");
    }

    public function run($user = null, $pass = null) {
        $this->data = $this->model->check_login();
    }

}