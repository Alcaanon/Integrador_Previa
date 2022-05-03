<?php 
    require_once('config/config.php');

    $service = new ProdutoService();

    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    if($service->deletar($id))
    {
        header('location: ./produtos?success=true');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./produtos?error=true');
        exit;
    }