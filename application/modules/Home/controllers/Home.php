<?php

class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){

        echo "Welcome to hmvc";
    }
    public function test()
    {
        echo "hello test method";
    }
}
?>