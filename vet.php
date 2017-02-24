<?php
/*
 *  MÉTODO DE ORDENAÇÃO -- Bubble Sort -- em php array
 *  Por Emerson Santana Cunha
 */

function bubbleSort($array)
{
	$TL2 = count($array);
	
	while($TL2 > 0) 
	{
		for($i=0; $i < $TL2-1; $i++)
		{
			if($array[$i+1] < $array[$i]) // próximo menor que atual no i
			{
				//realiza a troca, com uso de auxiliar
				$aux = $array[$i+1];
				$array[$i+1] = $array[$i];
				$array[$i] = $aux;
			} 

		}
		$TL2--; //decrementa o TL2, pois um elemento já esta na posição correta.
	}
return $array;
}

$vet = array(10,9,8,7,6,5,4,3,2,1);

var_dump($vet);
echo "<br/>";
$vet = bubbleSort($vet);

var_dump($vet);