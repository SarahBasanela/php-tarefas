
<?php 
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
    

    function rabiscar(){
        if ($this->tampada == true){
            echo "<p>ERRO, a caneta está tampada, não posso rabiscar</p>";
        }else{
            echo "Estou rabiscando...";
        }
    }
    function tampar(){
        $this->tampada = true;
        echo "Tampei a caneta\n";
    }
    function destampar(){
        $this->tampada = false;
        echo "Destampei a caneta\n";
    }
}