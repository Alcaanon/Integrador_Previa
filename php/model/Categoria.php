<?php

    class Categoria {

        private int $id;
        private string $imagem;
        private string $nome;
        private string $descricao;
        private string $criadoem;

        public function getId(): int {
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

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }

        public function getDescricao(): string
        {
            return $this->descricao;
        }

        public function setDescricao(string $descricao): void {
            $this->descricao = $descricao;
        }
        
        public function getCriadoEm(): string {
            return date('d/m/Y - H:i:s', strtotime($this->criadoem));
        }

        public function setCriadoEm(string $criadoem): void {
            $this->criadoem = $criadoem;
        }
    }