<?php 
    require_once('config/config.php');
    session_start();

    $service = new CategoriaService();

    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $categoria = new Categoria();
    $categoria->setImagem($imagem);
    $categoria->setNome($nome);
    $categoria->setDescricao($descricao);

    if($service->cadastrar($categoria))
    {
        header('location: ./categorias?success=true');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./categorias?error=true');
        exit;
    }