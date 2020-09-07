<?php
class Module_model extends CI_Model {


function welcome_model(){
    // Call the Model constructor
    parent::CI_Model();

    // prints out 'help!' accordingly
   //echo $this->get_greetee();
}

function help(){
    echo "MA";
}
public function hi()
{
    echo "ON";
}

}
?>