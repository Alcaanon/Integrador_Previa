<?php

class NovidadeRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }

    function fnAddNovidade($novidade): bool
    {
        try {

            $query = "INSERT INTO novidades (imagem,  direcao, titulo, descricao, descricao2, categoria_id) ";
            $query .= "values (:pimagem, :pdirecao, :ptitulo, :pdescricao, :pdescricao2, :pcategoriaId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pimagem", $novidade->getImagem());
            $stmt->bindValue(":pdirecao", $novidade->getDirecao());
            $stmt->bindValue(":ptitulo", $novidade->getTitulo());
            $stmt->bindValue(":pdescricao", $novidade->getDescricao());
            $stmt->bindValue(":pdescricao2", $novidade->getDescricao2());
            $stmt->bindValue(":pcategoriaId", $novidade->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir a novidade no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnUpdateNovidade($novidade): bool
    {
        try {

            $query = "UPDATE novidades set imagem = :pimagem, direcao = :pdirecao, titulo = :ptitulo, descricao = :pdescricao,  descricao2 = :pdescricao2, categoria_id = :pcategoriaId WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pid", $novidade->getId());
            $stmt->bindValue(":pimagem", $novidade->getImagem());
            $stmt->bindValue(":pdirecao", $novidade->getDirecao());
            $stmt->bindValue(":ptitulo", $novidade->getTitulo());
            $stmt->bindValue(":pdescricao", $novidade->getDescricao());
            $stmt->bindValue(":pdescricao2", $novidade->getDescricao2());
            $stmt->bindValue(":pcategoriaId", $novidade->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao editar a novidade no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
    public function fnListNovidade($limit = 9999) {
        try {

            $query = "SELECT id, imagem, direcao, titulo, descricao, descricao2, categoria_id categoriaId, criado_em criadoEm FROM novidades ORDER BY criado_em DESC LIMIT :plimit";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':plimit', $limit);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Novidade');
                return  $stmt->fetchAll();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar as novidades no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarNovidade($id) {
        try {

            $query = "SELECT id, imagem, direcao, titulo, descricao, descricao2, categoria_id categoriaId, criado_em criadoEm FROM novidades WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Novidade');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar as novidades no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
    public function fnDeletarNovidade($id) {
        try {

            $query = "DELETE FROM novidades WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Novidade');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao deletar a novidade no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
}
