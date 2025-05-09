<?php

class Filme
{
    private $titulo;
    private $desc;
    private $imagem;

    public function __construct($titulo, $desc, $imagem)
    {
        $this->titulo = $titulo;
        $this->desc = $desc;
        $this->imagem = $imagem;
    }

    public function getCard()
    {
        $card = '<div class="card mb-3">';
        $card .= '<img src="..." class="card-img-top" alt="...">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title">Card title</h5>';
        $card .= '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
        $card .= '<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>';
        $card .= '</div>';
        $card .= '</div>';
        $card .= '<div class="card">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title">Card title</h5>';
        $card .= '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
        $card .= '<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>';
        $card .= '</div>';
        $card .= '<img src="..." class="card-img-bottom" alt="...">';
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
}
