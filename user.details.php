<?php  
  require_once('config/config.php');

  $UsuarioService = new UsuarioService(); 
  $usuario = $UsuarioService->localizar($_GET['id']);
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
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
  
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
            <h2 class="section-heading text-uppercase">Sistema de Edição de Usuários</h2>
            <h3 class="section-subheading text-muted">Utilize a tabela abaixo para incluir as informações sobre os usuários.</h3>
        </div>
        <form id="usuariosForm" data-sb-form-api-token="API_TOKEN" method="POST" action="user.edit">
            <div class="row align-items-center mb-5 offset-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="idIdentificador">Identificador</label>
                        <input type="text" id="idIdentificador" name="inputIdentificador" class="form-control" value="<?= $usuario->getId() ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <!-- Nome input-->
                        <input class="form-control" id="nome" name="inputNome" value="<?= $usuario->getNome() ?>" type="text" placeholder="Informe o nome *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="nome:required">Informe o nome.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email input-->
                        <input class="form-control"  id="email" name="inputEmail" value="<?= $usuario->getEmail() ?>" type="text" placeholder="Informe o email *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">Informe o email.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Senha input-->
                        <input class="form-control" id="senha" name="inputSenha" value="<?= $usuario->getSenha() ?>" type="password" placeholder="Informe a senha *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="senha:required">Informe a senha.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Senha Repetida input-->
                        <input class="form-control"  id="senha2" name="inputSenhaRepetida" value="<?= $usuario->getSenha() ?>" type="password" placeholder="Repita a senha *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="senha2:required">Repita a senha.</div>
                    </div>
                </div>
            </div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Alterar</button></div>
        </form>
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
