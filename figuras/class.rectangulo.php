<?php
class rectangulo extends figura implements formulas{
    private $lado1;
    private $lado2;
	function __construct($laboA,$ladoB){
		$this->tipo = "rectangulo";
		$this->lado1=$ladoA;
        $this->lado2=$laboB;
	}
	
	public function area(){
		$this->a=($this->lado1 * $this->lado2);	
	}
		
	public function perimetro(){
		$this->p=($this->lado1 * 2+$this->lado2 * 2);
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
