<?php

class Produto
{
    private int $id;
    private string $imagem;
    private string $titulo;
    private string $descricao;
    private int $preco;
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

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
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