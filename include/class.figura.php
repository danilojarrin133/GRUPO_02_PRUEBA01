<?php
	
	abstract class figura{
		private $tipo;
		private $a; //area	
		private $p; //perimetro
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="" >
			<table border=1 align="center">
				<tr>
					<th class="p-2 bg-primary text-white" colspan="2">INGRESE LOS DATOS DE LA FIGURA A CALCULAR</th>
				</tr>
				<tr>
					<td class="p-2 text-black">Tipo: </td>
					<td>
						<select class="form-select" aria-label="Default select example" name="tipo" OnChange=habilitar(document.figuras);>
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="p-2 bg-primary text-white">Lado 1:</td>
					<td><input type="text" class="form-control" placeholder="lado 1" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td class="p-2 text-black">Lado 2:</td>
					<td><input type="text" class="form-control" placeholder="lado 2" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td class="p-2 bg-primary text-white">Lado 3:</td>
					<td><input type="text" class="form-control" placeholder="lado 3" name="lado_3"size="4" disabled></td>
				</tr>								
				<tr>
					<th colspan="2"><center><button type="submit" name="calcular" class="btn btn-success">Calcular</button><center></th>
				</tr>
			</table>
			</form>';
			return $html;
		}
		public abstract function getArea();
	    
	    
	    public abstract function getPerimetro();
	    
	    
	    public abstract function getTipo();
	}
?>
