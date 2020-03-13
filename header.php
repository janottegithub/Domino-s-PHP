<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if(isset($title) && !empty($title)) {echo $title;}else {echo "Default title tag";}?>
  <!-- bootstrap css -->
   <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <!-- main css -->
  <!-- font awesome -->
  <!--<link rel="stylesheet" href="css/all.css">-->
  
  <!--<link rel="stylesheet" href="style.css">-->
  <title><?php echo $title;?></title>
  <?php wp_head(); ?>

</head>

<body>
  <!-- header -->
  <header>
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg px-4">
      <a class="navbar-brand" href="#">
      <img src="<?php echo get_theme_file_uri("img/logo.svg"); ?>" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
        <span class="toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="<?php the_permalink();?>">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php the_permalink();?>">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php the_permalink();?>">store</a>
          </li>
        </ul>
        <div class="nav-info-items d-none d-lg-flex ">
          <!-- single info -->
          <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
            <span class="info-icon mx-lg-3"><i class="fas fa-phone text-white"></i></span>
            <p class="mb-0 text-white">+32 477 19 6474</p>
          </div>
          <!-- end of single info -->
          <!-- single info -->
          <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
            <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart text-white"></i></span>
            <p class="mb-0 text-capitalize text-white"><span id="item-count">0</span> items - $<span class="item-total">0</span></p>
          </div>
          <!-- end of single info -->
          <a href="login.php">
            <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
              <span class="cart-info__icon mr-2"><i class="fas fa-user text-white"></i></span>
              <p class="mb-0 text-capitalize text-white">login</p>
            </div>
          </a>
        </div>
      </div>
    </nav>
    <!-- end of nav -->


  <!-- modal-container -->
  <div class="container-fluid ">
    <div class="row lightbox-container align-items-center">
      <div class="col-10 col-md-10 mx-auto text-right lightbox-holder">
        <span class="lightbox-close"><i class="fas fa-window-close"></i></span>
        <div class="lightbox-item"></div>
        <span class="lightbox-control btnLeft"><i class="fas fa-caret-left"></i></span>
        <span class="lightbox-control btnRight"><i class="fas fa-caret-right"></i></span>
      </div>

    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 <!-- End of Modal content-->