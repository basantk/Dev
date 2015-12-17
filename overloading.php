<?php 
class overload{
	public $name;
	public function __cunstruct($agr){
	$this->name=$agr;
	}
	public function __call($methodname,$agrument){
		if($methodname=='sum2'){
		
		if(count($agrument)==2){
			$this->sum($agrument[0],$agrument[1]);
		}
		if(count($agrument)==3){
			
			echo $this->sum1($agrument[0],$agrument[1],$agrument[2]);
		}
		}
		
	}
	public function sum($a,$b){
		return $a+$b;
	}
	public function sum1($a,$b,$c){
		
		return $a+$b+$c;
	}
}
$object=new overload('Sum');
echo $object->sum2(1,2,3);
//echo $object->sum(1,2,3)