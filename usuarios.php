<?php 
  require_once('config/config.php');
  $usuarioService = new UsuarioService(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jubileu Camisas | Loja Oficial de Camisas</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="./plugins/themefisher-font/style.css">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="./plugins/animate/animate.css">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="./plugins/slick/slick.css">
  <link rel="stylesheet" href="./plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body id="body">

<?php 
	require("./header.php");
?>

<?php 
	require("./loginnav.php");
?>

<section class="page-section" id="usuarios">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sistema de Gerenciamento de Produtos</h2>
            <h3 class="section-subheading text-muted">Utilize a tabela abaixo para editar ou excluir as informações sobre os produtos.</h3>
        </div>
        <table class="table table-stripped" style="color: black;">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Criado Em</th>
                <th>Gerir</th>
            </thead>
            <tbody>
                <?php foreach ($usuarioService->listar(10) as $index => $usuario): ?>
                <tr>
                    <td><?= $usuario->getId() ?></td>
                    <td><?= $usuario->getNome() ?></td>
                    <td><?= $usuario->getEmail() ?></td>
                    <td><?= $usuario->getCriadoEm() ?></td>
                    <td>
                        <a href="user.details.php?id=<?= $usuario->getId() ?>"><i class="bi bi-pencil-square"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></i></a>&nbsp;
                        <a onclick="return confirm('Deseja realmente remover este item?')" href="user.delete.php?id=<?= $usuario->getId() ?>"> <i class="bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if($_GET) : ?>
                <tfoot>
                    <tr>
                        <?php if(isset($_GET['error'])): ?>
                            <td colspan="6"><h3 style="font-size: small;" class="text-danger"><strong>Ocoreu um erro ao tentar editar/apagar no banco.</strong></h3></td>
                        <?php elseif(isset($_GET['success'])): ?>
                            <td colspan="6"><h3 style="font-size: small;" class="text-success"><strong>Editado/Apagado com sucesso do banco.</strong></h3></td>
                        <?php endif; ?>
                    </tr>
                </tfoot>
            <?php endif; ?>
        </table>
    </div>
</section>

<?php 
	require("./footer.php");
?>


    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
