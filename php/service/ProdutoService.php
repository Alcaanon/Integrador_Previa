<?php

    class ProdutoService {
        
        private $repository;

        public function __construct() {
            $this->repository = new ProdutoRepository();
        }

        public function cadastrar(Produto $produto): bool {
            return $this->repository->fnAddProduto($produto);
        }

        public function atualizar(Produto $produto): bool {
            return $this->repository->fnUpdateProduto($produto);
        }
        
        public function listar($limit) {
            return $this->repository->fnListProduto($limit);
        }
        
        public function localizar($id) {
            return $this->repository->fnLocalizarProduto($id);
        }

        public function deletar($id) {
            return $this->repository->fnDeletarProduto($id);
        }
    } 