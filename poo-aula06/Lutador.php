<?php 

class Lutador{
    //Atributos
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Construtor
    public function __construct($nom, $nasc, $id, $al, $pe, $v, $d, $e )
    {   
        $this->nome = $nom;
        $this->nascionalidade = $nasc;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $v;
        $this->derrotas = $d;
        $this->empates = $e;
    }

    //Métodos Especiais
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function getNascionalidade()
    {
        return $this->nascionalidade;
    }

    public function setNascionalidade($nasc)
    {
        $this->nascionalidade = $nasc;

    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($id)
    {
        $this->idade = $id;

    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($al)
    {
        $this->altura = $al;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();

    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if ($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif ($this->peso <=83.9){
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        } 
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($v)
    {
        $this->vitorias = $v;

    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }


    public function setDerrotas($d)
    {
        $this->derrotas = $d;

    }
 
    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($e)
    {
        $this->empates = $e;

    }

    //Metodos
    public function apresentar(){
        echo "<p>----------------------------------</p>";
        echo "<p>CHEGOU A HORA ! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNascionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso();
        echo "<br>Ele tem " . $this->getVitorias() . " vitorias, ";
        echo $this->getDerrotas() . " derrota(s) e " . $this->getEmpates() . " empates.";
    }
    public function status(){
        echo "<p>----------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes";
        echo " perdeu " . $this->getDerrotas() . " vezes";
        echo " e empatou " . $this->getEmpates() . " vezes.";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

}
?>