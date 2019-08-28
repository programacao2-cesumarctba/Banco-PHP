<?php
namespace App;

use App\ContaBanco;

class  Cliente
{

    public  $nome;
    public  $email;
    public $endereco;

    public function criacli ($nome,$email,$endereco)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->$endereco = $endereco;
        echo "<br>...................................<br>";
      echo "$nome<br> $email<br> $endereco";
      echo "<br>...................................<br>";
    }





    public function setnome($new)
    {

$this->nome=$new;

    }


}
