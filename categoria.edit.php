<?php 
    require_once('config/config.php');

    $service = new CategoriaService();

    $id = filter_input(INPUT_POST, 'inputIdentificador', FILTER_SANITIZE_NUMBER_INT);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $categoria = new Categoria();
    $categoria->setId($id);
    $categoria->setImagem($imagem);
    $categoria->setNome($nome);
    $categoria->setDescricao($descricao);

    if($service->atualizar($categoria))
    {
        header('location: ./categorias?success=true');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao atualizar';
        header('location: ./categorias?error=true');
        exit;
    }