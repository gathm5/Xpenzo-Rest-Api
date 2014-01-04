<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

    }

    public function other($arg = null) {
        if ($arg) {
            echo "The argument sent is $arg<br />";
        }
    }

}

?>
