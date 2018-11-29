<?php
//8
class funcionario{
	public $departamento;
	public $salario;
	private $dataEntrada;
	public $cpf;
}

//12
public function informarDataEntrada (Data $data){

	if ($data->dia > 31 or $data->mes > 12) {
		echo "data incorreta";
	}else{
		$this->dataEntrada = $data;
	}

}

public function recebeAumento (){

	$aumento = this->salario = $this->salario + $aumento;

}

public function calculaGanhoAnual (){

	$ganhoAnual = $this->salario * 12;
	return $ganhoAnual; 
}

//9
public function mostra(){
	return "O funcionario do departamento {$this->departamento}";
}