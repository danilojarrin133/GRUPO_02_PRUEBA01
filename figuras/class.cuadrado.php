<?php
class cuadrado extends figura implements formulas {
	private $lado1;
	
	function __construct($l1){
		$this->tipo = "cuadrado";
		$this->lado1=$l1;
	}
	
	public function area(){
		$this->a=($this->lado1 * $this->lado1);	
	}
		
	public function perimetro(){
		$this->p=($this->lado1 * 4);
	}

	public function getArea(){
		return $this->a;
	}
	    
	public function getPerimetro(){
		return $this->p;
	}
	    
	public function getTipo(){
		return $this->tipo;
	}  
	
}
?>
