<?php

    class UsuarioService {
        private $repository;

        public function __construct() {
            $this->repository = new UsuarioRepository();
        }

        public function cadastrar(Usuario $usuario): bool {
            return $this->repository->fnAddUsuario($usuario);
        }
        
        public function atualizar(Usuario $usuario): bool {
            return $this->repository->fnUpdateUsuario($usuario);
        }
        
        public function login(Usuario $usuario) {
            return $this->repository->fnLoginUsuario($usuario);
        }
        
        public function listar($limit) {
            return $this->repository->fnLisUsuarios($limit);
        }

        public function localizar($id) {
            return $this->repository->fnLocalizarUsuario($id);
        }
        
        public function LocalizarPorEmail($email) {
            return $this->repository->fnLocalizarUsuarioPorEmail($email);
        }
        
        public function deletar($id) {
            return $this->repository->fnDeletarUsuarios($id);
        }
    }