<?php

class Card
{
    private $titulo;
    private $marca;
    private $motor;
    private $desc;
    private $imagem;
    private $ano;

    public function __construct($titulo, $desc, $imagem, $marca, $motor, $ano)
    {
        $this->titulo = $titulo;
        $this->desc = $desc;
        $this->imagem = $imagem;
        $this->marca = $marca;
        $this->motor = $motor;
        $this->ano = $ano;
    }

    public function getCard()
    {
        $card = '<div class="card mb-3">';
        $card .= '<img src="'. $this->imagem .'" class="card-img-top" alt="...">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title" style="font-size: 36px;">'. $this->titulo . " " .$this->ano .'</h5>';
        $card .= '<p class="card-text" style="font-size: 18px;">Marca: ' . $this->marca . '</p>';
        $card .= '<p class="card-text" style="font-size: 18px;">Motor: ' . $this->motor . '</p>';
        $card .= '<p class="card-text">'. $this->desc . '</p>';
        $card .= '</div>';
        $card .= '</div>';
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
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;

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

        public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of imagem
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

        public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of imagem
     */
    public function setMotor($motor): self
    {
        $this->motor = $motor;

        return $this;
    }

        public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of imagem
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}