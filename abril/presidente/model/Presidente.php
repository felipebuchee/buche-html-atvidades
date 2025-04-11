<?php 

class Presidente{
    private $num;
    private $nome;
    private $inicio;
    private $fim;


    public function __construct($num, $nome, $inicio, $fim){
        $this->num = $num;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }

    /**
     * Get the value of num
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set the value of num
     */
    public function setNum($num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of inicio
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set the value of inicio
     */
    public function setInicio($inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get the value of fim
     */
    public function getFim()
    {
        return $this->fim;
    }

    /**
     * Set the value of fim
     */
    public function setFim($fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}