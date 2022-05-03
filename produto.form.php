<?php  
  require_once('config/config.php');
  $categoriaService = new CategoriaService(); 
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

<section class="page-section" id="produtos">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sistema de Cadastro de Produtos</h2>
            <h3 class="section-subheading text-muted">Utilize a tabela abaixo para incluir as informações sobre as produtos.</h3>
        </div>
        <form id="produtosForm" data-sb-form-api-token="API_TOKEN" method="POST" action="produto.register">
            <div class="row align-items-center mb-5 offset-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Imagem input-->
                        <input class="form-control" id="imagem" name="inputImagem" type="text" placeholder="Informe a imagem *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="imagem:required">A Imagem é necessária.</div>
                    </div>
                    <div class="form-group">
                        <!-- Titulo input-->
                        <input class="form-control"  id="title" name="inputTitulo" type="text" placeholder="Informe o titulo *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="title:required">O Titulo é necessário.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Descrição input-->
                        <input class="form-control" id="description" name="inputDescricao" type="text" placeholder="Informe a descrição *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="description:required">A descrição é necessária.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Preco input-->
                        <input class="form-control"  id="preco" name="inputPreco" type="text" placeholder="Informe o Preço *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="preco:required">O Preço é necessário.</div>
                    </div>
                    <div class="form-group">
                                <label for="CategoriaId">Categoria</label>
                                <select id="CategoriaId" name="inputCategoria" class="form-control custom-select">
                                <option selected disabled>Selecione</option>
                                <?php foreach($categoriaService->listar($limit) as $categoria): ?>
                                
                                <option value="<?= $categoria->getId()?>"><?= $categoria->getNome()?></option>
                                <?php endforeach; ?>
                                </select> 
                            </div>
                            <br>
                </div>
            </div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Cadastrar</button></div>
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
