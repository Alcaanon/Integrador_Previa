<?php

class Novidade
{
    private int $id;
    private string $imagem;
    private string $direcao;
    private string $titulo;
    private string $descricao;
    private string $descricao2;
    private int $categoriaid;
    private string $criadoem;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): void {
        $this->imagem = $imagem;
    }

    public function getDirecao(): string
    {
        return $this->direcao;
    }

    public function setDirecao  (string $direcao): void {
        $this->direcao = $direcao;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function getDescricao2(): string
    {
        return $this->descricao2;
    }

    public function setDescricao2(string $descricao2): void {
        $this->descricao2 = $descricao2;
    }

    public function getCategoriaId(): int {
        return $this->categoriaid;
    }

    public function setCategoriaId(int $categoriaid): void {
        $this->categoriaid = $categoriaid;
    }

    public function getCriadoEm(): string {
        return date('d/m/Y - H:i:s', strtotime($this->criadoem));
    }

    public function setCriadoEm(string $criadoem): void {
        $this->criadoem = $criadoem;
    }
}