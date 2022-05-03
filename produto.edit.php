<?php 
    require_once('config/config.php');

    $service = new ProdutoService();

    
    $id = filter_input(INPUT_POST, 'inputIdentificador', FILTER_SANITIZE_NUMBER_INT);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'inputPreco', FILTER_SANITIZE_NUMBER_FLOAT);
    $categoriaId = filter_input(INPUT_POST, 'inputCategoria', FILTER_SANITIZE_NUMBER_INT);
 
    $produto = new Produto();
    $produto->setId($id);
    $produto->setImagem($imagem);
    $produto->setTitulo($titulo);
    $produto->setDescricao($descricao);
    $produto->setPreco($preco);
    $produto->setCategoriaId($categoriaId);

    if($service->atualizar($produto))
    {
        header('location: ./produtos?success=true');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./produtos?error=true');
        exit;
    }