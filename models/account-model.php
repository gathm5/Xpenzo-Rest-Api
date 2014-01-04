<?php

class Account_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function check_login() {
        $sth = $this->db->prepare("SELECT id FROM mvc WHERE
				user = :login AND pass = (:password)");
        $sth->execute(array(
            ':login' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        //$data = $sth->fetchAll();

        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('loggedIn', true);
            header('location: /dashboard');
        } else {
            header('location: /account/login');
        }
    }

}