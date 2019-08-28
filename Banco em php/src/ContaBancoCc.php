<?php
namespace App;
use App\Contabanco;

use App\ContaBanco;


$contaP = new ContaBanco;

class ContaBancoCc extends ContaBanco{
	public $limite=500;
	public $porcjuros=1.5;
	public $totjuros;


public function emprest($empres)
{
	if($empres<$this->limite)
	{
		echo"impossivel valor menor que o limite";
	}
	else
	{
		$this->limite=$this->limite-$empres;
	}


	public function Cjuros($empres)
{
	//se o limite estiver menor que 500 quer dizer que houve emprestimo , se sim aplica juros
	if($this->limite<500)
	{
		$this->$totjuros=$this->limite*$this->porcjuros;
	}

}

}
