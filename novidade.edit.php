<?php 
    require_once('config/config.php');
    session_start();

    $service = new NovidadeService();

    
    $id = filter_input(INPUT_POST, 'inputIdentificador', FILTER_SANITIZE_NUMBER_INT);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $direcao = filter_input(INPUT_POST, 'inputDirecao', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao2 = filter_input(INPUT_POST, 'inputDescricao2', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoriaId = filter_input(INPUT_POST, 'inputCategoria', FILTER_SANITIZE_NUMBER_INT);
 
    $novidade = new Novidade();
    $novidade->setId($id);
    $novidade->setImagem($imagem);
    $novidade->setDirecao($direcao);
    $novidade->setTitulo($titulo);
    $novidade->setDescricao($descricao);
    $novidade->setDescricao2($descricao2);
    $novidade->setCategoriaId($categoriaId);

    if($service->atualizar($novidade))
    {
        header('location: ./novidades?success=true');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./novidades?error=true');
        exit;
    }