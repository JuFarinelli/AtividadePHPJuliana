<?php
class Vinho{
    private $nome;
    private $tipo;
    private $preco;
    private $safra;
//NOME
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
//TIPO
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

//PREÇO
        public function getPreco()
        {
            return $this->preco;
        }

        public function setPreco($preco)
        {
            $this->preco = $preco;
        }

 //SAFRA
        public function getSafra()
        {
            return $this->safra;
        }       

        public function setSafra($safra)
        {
            $this->safra = $safra;
        }

//mostrar vinho
        public function mostrarVinho() {
            return "Nome: {$this->nome}<br>Tipo: {$this->tipo}<br>Preço: R$ {$this->preco}<br>Safra: {$this->safra}";
        }

//verificar oferta
        public function verificaPreco($preco = 25.00) {
            return $this->preco = $preco;
                }
}
?>