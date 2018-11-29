<?php

	require __DIR__ . "/models/funcionario.php";
	require __DIR__ . "/models/data.php";

	$funcionario = new funcionario();
	$funcionario->salario = 1200;
	$bianca->departamento = "logistica";

	$data = new data();
	$data->dia = 10;
	$data->mes = 2;
	$data->ano = 2002;

	$funcionario->informarDataEntrada($data);

	$funcionario->cpf= "111.333.999-00";

echo $funcionario->mostra();