<?php

class Student extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }
    public function index($id = null){
        echo "<h1>Test Method</h1>".$id;
    }
    
    public function run($any = null)
    {
        if($any == null)
        {
            return;
        }else
        {
        echo "<h1>running ".$any."</h1>";
        }
    }


}
?>