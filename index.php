<?php
class Calculator
{

public $input;
public $input2;
private $output;

public function Setinput($int){

$this->input= (int) $int;

}
public function Setinput2($int){

$this->input2= (int) $int;

}
public function calculation(){
$this->output= $this->input * $this->input2;


}
public function getOutput(){



return $this->output;
}

}
$obj=new Calculator();
$obj->Setinput(5);
$obj->Setinput2(22);
$obj->calculation();

echo $obj->getOutput();
?>