
<?php 
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        public $tampada;
    

    private function rabiscar(){
        if ($this->tampada == true){
            echo "<p>ERRO, a caneta está tampada, não posso rabiscar</p>";
        }else{
            echo "Estou rabiscando...";
        }
    }
    public function tampar(){
        $this->tampada = true;
        echo "Tampei a caneta\n";
    }
    public function destampar(){
        $this->tampada = false;
        echo "Destampei a caneta\n";
    }
}