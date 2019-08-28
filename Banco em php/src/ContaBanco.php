<?php
namespace App;
use App\Cliente;


$newcliente= new Cliente;
//classe principal bancaria pai
 class ContaBanco {
    public  $codConta;
    public  $agencia;
    public  $saldo;
    public $hitorico;
    public $cliente;

    //declaração das variaveis
// tentativa de vincular o novo cliente ao nome da nova conta criada seja Poupança ou corrente , por motivos de tempo foi abortado;
// $novocli = new Cliente;
// $novocliente->getnome;

    public function ContaBancaria($num,$agencia,$saldoInicial,$novocliente)
    {
        $this->codConta = $num;
        $this->agencia = $agencia;
        $this->saldo = $saldoInicial;
        $this->cliente=$novocliente;
    }
    //método para puxar os valores

    public function deposita($valor)
    {
        $this->saldo += $valor;
        echo "---------------------------------------<br>";
        echo "Após 1 mês:<br>";
        echo "Deposito de " . $valor . "<br>";
        echo "Seu saldo após o depósito é de: ".$this->saldo;
        echo "<br>---------------------------------------";
        return $this->saldo;
    }
    //método para efetuar o depósito

    public function saque($valor)
    {
        if($this->saldo - $valor < 0)
        {    // verifica se o saldo menos o valor é menor que zero
            echo "<br>Saque não permitido!";
            echo "<br>Saldo atual é de: ".$this->saldo;
        } else {
            $this->saldo -= $valor;
            echo "<br>Saque de " . $valor . " na conta";
            echo "<br>Seu saldo após o saque é de: ".$this->saldo;
        }
        return $this->saldo;
    }
    //método para efetuar o saque

    public function setsaldo ()
    {
        return $this->saldo;
    }

    public function getcodConta()
    {
        return $codConta;
    }

    public function setNumConta($codConta)
    {
        $this->codConta = $codConta;
    }

    public function getAgencia() {
        return $agencia;
    }

    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function getSaldo()
    {
        return $saldo;
    }


    public function mostraconta()
    {
echo"------------------------<br>";
        echo
    "Conta Perfil"."<br>".
    $this->codConta."<br>".
    $this->agencia."<br>".
    $this->saldo."<br>".
    $this->hitorico."".  // nao implementado
    $this->cliente."<br>";
echo"<br>------------------------<br>";


    }


}

//classe principal bancaria filha CORRENTE
class ContaBancoCc extends ContaBanco{
    public $limite=500;
    public $porcjuros=0.05;
    public $totjuros;


public function emprest($empres)
{
    if($empres>$this->limite)
    {
        echo"------------------------------------<br>";
        echo"impossivel valor menor que o limite <br>";
        echo"------------------------------------<br>";
    }
    else
    {

        $this->limite=$this->limite-$empres;
        $this->totjuros=$this->porcjuros*$empres;
        $totaljuros2=$empres+$this->totjuros;
        echo "---------------------------------------<br>";
        echo "Após 1 mês:<br>";
        echo"Você fez um empréstimo de: $empres<br>";
        echo"A taxa total de juros é: $this->totjuros<br> ";
        echo"o valor após juros : $totaljuros2 <br> ";

    }
}


   /* public function Cjuros($empres1)
{
    //se o limite estiver menor que 500 quer dizer que houve emprestimo , se sim aplica juros
    if($this->limite<500)
    {
        $this->totjuros=$this->limite*$this->porcjuros;
        echo"total de juros ao mes é: $this->"
    }

}
*/

}

//classe principal bancaria filha POUPANÇA
class ContaBancoCp extends ContaBanco
{

    public $Rendcont=3;
    public $saldop;

public function poupar($qtd)
{

 if($qtd>10)
 {
    $this->saldop = $qtd;
    echo "--------------------------------<br>
    Seu saldo em poupança é : ".$this->saldop."R$<br>";
    $rendimento=$this->saldop*0.05;
    echo"---------------------------------<br>
    Seu rendimento em um mes será : $rendimento  R$<br>";
  }
  else
  {
    $rendimento=$this->saldop*0.05;
echo"....................................<br>";
    echo"Deposite valor maior que $qtd <br>";
echo"....................................<br>";
  }

}

}
