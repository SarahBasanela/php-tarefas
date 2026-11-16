<?php 
class Conta{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso</p>";
    }

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->saldo = 150;
        }
    }
    public function fecharConta(){
       if($this->getSaldo() > 0){
            echo "<p>Conta ainta tem dinheiro, não posso fecha-la</p>";
       }elseif ($this->getSaldo() < 0){
            echo "<p>Conta está em debido, não posso fecha-la</p>";
       }else{
          $this->setStatus(false); 
       }
    }
    public function depositar($valor){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valor);
        }else{
            echo "<p>Conta fechada</p>";
        }
    }
    public function sacar($valor){
        if ($this->getStatus()){
            if ($this->getSaldo() > $valor){
                $this->setSaldo($this->getSaldo() - $valor);
            }else{
                echo "<p>Saldo insuficiente para saque</p>";
            }  
        }else{
            echo "<p>Não posso sacar de uma conta encerrada</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        }elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        }else{
            echo "<p>Erro na conta</p>";
        }
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($n){
        $this->numConta= $n;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo= $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono= $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($sal){
        $this->saldo = $sal;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){
        $this->status = $st;
    }

}
?>