<?php 

class simple{
	
	public $a = "helloworld";
	public $b = "anoither";
	public $c = "anoither";
	public function display(){
	echo $this->a;
	}
}

$obj=new simple();
$obj->display();

?>