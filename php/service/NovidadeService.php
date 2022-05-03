<?php

    class NovidadeService {
        
        private $repository;

        public function __construct() {
            $this->repository = new NovidadeRepository();
        }

        public function cadastrar(Novidade $novidade): bool {
            return $this->repository->fnAddNovidade($novidade);
        }

        public function atualizar(Novidade $novidade): bool {
            return $this->repository->fnUpdateNovidade($novidade);
        }
        
        public function listar($limit) {
            return $this->repository->fnListNovidade($limit);
        }
        
        public function localizar($id) {
            return $this->repository->fnLocalizarNovidade($id);
        }

        public function deletar($id) {
            return $this->repository->fnDeletarNovidade($id);
        }
    } 