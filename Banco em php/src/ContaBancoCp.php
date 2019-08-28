<?php
namespace App;
use App\Contabanco;


use App\ContaBanco;


$contaP = new ContaBanco;

class ContaBancoCp extends ContaBanco{

	public Rendcont=3;

public function poupar($qtd)
{


	$this->saldo($qtd*$this->Rendcont);
	echo $this->saldo;


}

}
