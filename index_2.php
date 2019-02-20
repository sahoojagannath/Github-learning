<?php
class Example{


	public $item='My product';
	public $regula=200;
	public function test(){

$this->Hello();


	}

	public function Hello(){


echo $this->regula;
		echo 'Hello world';
	}

public function World(){


	echo $this->regula;
}
}
$obs=new Example;
$obs->test();
$obs->World();
?>