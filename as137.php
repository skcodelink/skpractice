<!-- this is a example of constructor -->
<?php

class A{
	public function __construct(){
		echo "in base class constructor...";

	}
}
class B extends A{
	public function B(){
		parent::__construct();
		echo "in subclass costruct";

	}
}
$obj=new B();

?>
<hr>
<!-- this is example of static and contant variable-->
<?php 
class Simple{
	public function __destruct(){
		echo "destructor call";
	}
}
$obj=new Simple();
?>
<hr>
<!-- this is the example of static and constant -->
<?php
	class Example{
		const va="Constant value";}

		Example::va;
	class Sub extends Example{
		public Static $st="static value";
		function display(){
			echo parent::va;
			echo self::$st;
		}}


		$obj=new Sub();
		$obj->display();

		

?>
<hr>
<!-- this is the example of final -->
<?php 
  
// Program to understand use of  
// final keyword for methods 
class Base { 
      
    // Final method 
    final function printdata() { 
        echo " Base class final printdata function"; 
    } 
      
    // Non final method 
    function nonfinal() { 
        echo "\n This is nonfinal function of base class"; 
    } 
} 
  
// Class that extend base class 
class Derived extends Base { 
      
    // Inheriting method nonfinal  
    function nonfinal() { 
        echo "\n Derived class non final function"; 
    } 
      
    // Here printdata function can 
    // not be overridden 
} 
  
$obj = new Derived; 
$obj->printdata(); 
$obj->nonfinal(); 
?> 


