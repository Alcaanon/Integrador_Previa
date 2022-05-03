<?php

class ProdutoRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }

    function fnAddProduto($produto): bool
    {
        try {

            $query = "INSERT INTO produtos (imagem, titulo, descricao, preco, categoria_id) ";
            $query .= "values (:pimagem, :ptitulo, :pdescricao, :ppreco, :pcategoriaId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pimagem", $produto->getImagem());
            $stmt->bindValue(":ptitulo", $produto->getTitulo());
            $stmt->bindValue(":pdescricao", $produto->getDescricao());
            $stmt->bindValue(":ppreco", $produto->getPreco());
            $stmt->bindValue(":pcategoriaId", $produto->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o produto no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnUpdateProduto($produto): bool
    {
        try {

            $query = "UPDATE produtos set imagem = :pimagem, titulo = :ptitulo, descricao = :pdescricao,  preco = :ppreco, categoria_id = :pcategoriaId WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pid", $produto->getId());
            $stmt->bindValue(":pimagem", $produto->getImagem());
            $stmt->bindValue(":ptitulo", $produto->getTitulo());
            $stmt->bindValue(":pdescricao", $produto->getDescricao());
            $stmt->bindValue(":ppreco", $produto->getPreco());
            $stmt->bindValue(":pcategoriaId", $produto->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao editar o produto no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
    public function fnListProduto($limit = 9999) {
        try {

            $query = "SELECT id, imagem, titulo, descricao, preco, categoria_id categoriaId, criado_em criadoEm FROM produtos ORDER BY criado_em DESC LIMIT :plimit";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':plimit', $limit);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Produto');
                return  $stmt->fetchAll();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os produtos no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarProduto($id) {
        try {

            $query = "SELECT id, imagem, titulo, descricao, preco, categoria_id categoriaId, criado_em criadoEm FROM produtos WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Produto');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os produtos no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
    public function fnDeletarProduto($id) {
        try {

            $query = "DELETE FROM produtos WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Produto');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao deletar o produto no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
}
