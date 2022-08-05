<?php
class triangulo extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;

	function __construct($l1,$l2,$l3){
		$this->tipo = "triangulo";
		$this->lado1=$l1;
        $this->lado2=$l2;
        $this->lado3=$l3;
	}
	
	public function area(){
		$this->a=($this->lado1 * $this->lado2);	
	}
		
	public function perimetro(){
		$this->p=($this->lado1 + $this->lado2 + $this->lado3 );
	}

	public function getArea(){
		return $this->a;
	}
	    
	public function getPerimetro(){
		return $this->p;
	}
	    
	public function GetTipo(){
		return $this->tipo;
	}  
	
}
?>

