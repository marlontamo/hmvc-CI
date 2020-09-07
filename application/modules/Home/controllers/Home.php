<?php
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "home controller in index";
    }
    public function test(){
        $this->module_model->help();
        echo "RL";
        $this->module_model->hi();
    }
}
?>