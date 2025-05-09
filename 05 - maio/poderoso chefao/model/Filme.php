<?php

class Filme
{
    private $titulo;
    private $ano;
    private $diretor;
    private $imagem;

    public function __construct($titulo, $ano, $diretor, $imagem)
    {
        $this->titulo = $titulo;
        $this->ano = $ano;
        $this->diretor = $diretor;
        $this->imagem = $imagem;
    }

    public function getCard()
    {
        $card = "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
        $card .=  $this->titulo . "<br>";
        $card .= $this->ano . "<br>";
        $card .= $this->diretor . "<br>";
        $card .= "<img style='width: 100%; height: auto;' src='" . $this->imagem . "' /><br>";
        $card .= "</div>";
        return $card;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of imagem
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }
}
