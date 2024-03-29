
    <?php
    $page = "home";
    $title = "Pizza bestellen bij domino's.be";
    $metaD = "Welcome to my homepage";
    include 'header.php';
    ?>
    <!-- banner  -->
    <div class="container-fluid">
      <div class="row max-height justify-content-center align-items-center">
        <div class="col-10 mx-auto banner text-center">
          <h1 class="text-capitalize">welcome to <strong class="banner-title ">Domino's</strong></h1>
          <a href="#store" class="btn banner-link text-uppercase my-2">explore</a>

        </div>
        <div id="cart" class="cart">
          <!-- 
          <div class="cart-item d-flex justify-content-between text-capitalize my-3">
            <img src="img-cart/cake-2.jpeg" class="img-fluid rounded-circle" id="item-img" alt="">
            <div class="item-text">

              <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
              <span>$</span>
              <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
            </div>
            <a href="#" id='cart-item-remove' class="cart-item-remove">
              <i class="fas fa-trash"></i>
            </a>
          </div>
          

          <div class="cart-item d-flex justify-content-between text-capitalize my-3">
            <img src="img-cart/doughnut-2.jpeg" class="img-fluid rounded-circle" id="item-img" alt="">
            <div class="cart-item-text">

              <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
              <span>$</span>
              <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
            </div>
            <a href="#" id='cart-item-remove' class="cart-item-remove">
              <i class="fas fa-trash"></i>
            </a>
          </div>
          
          end of  cart item -->
          <!-- cart total -->
          <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
            <h5>total</h5>
            <h5> $ <strong id="cart-total" class="font-weight-bold">0</strong> </h5>
          </div>
          <!--end cart total -->
          <!-- cart buttons -->
          <div class="cart-buttons-container mt-3 d-flex justify-content-between">
            <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
            <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
          </div>
          <!--end of  cart buttons -->
          <!--  -->
        </div>
      </div>
    </div>




    <!--end of  banner  -->
  </header>
  <!-- header -->
  <!-- about us -->
  <section class="about py-5" id="about">
    <div class="container">

      <div class="row">
        <div class="col-10 mx-auto col-md-6 my-5">
          <h1 class="text-capitalize">about <strong class="banner-title ">us</strong></h1>
          <p class="my-4 text-muted w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam voluptas
            beatae vitae expedita consectetur nesciunt quia deserunt asperiores facere fuga dicta fugiat corrupti et omnis
            porro at dolorum! Ad!</p>
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase ">explore</a>
        </div>
        <div class="col-10 mx-auto col-md-6 align-self-center my-5">
          <div class="about-img__container">
            <img src="<?php echo get_theme_file_uri('img/pizza.png'); ?>" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end of about us -->


  <!-- store -->
  <section id="store" class="store py-5">
    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-10 mx-auto col-sm-6 text-center">
          <h1 class="text-capitalize">our <strong class="banner-title ">store</strong></h1>
        </div>
      </div>
      <!-- end of section title -->
      <!--filter buttons -->
      <div class="row">
        <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap .taste-btn-group" role="group">
          <button class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" type="button" data-filter="all"> all</a>
          <button class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" type="button" data-filter="italiano">Italiano</a>
          <button class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" type="button" data-filter="pikante">pikante</a>
          <button class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" type="button" data-filter="sweeties">sweeties</a>
          <button class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" type="button" data-filter="beef">Beefie</a>
        </div>
      </div>
      <!-- search box -->
      <div class="row">

        <div class="col-10 mx-auto col-md-6">
          <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder='item....' id="search-item">
            </div>

          </form>
        </div>
      </div>
      <!--end of filter buttons -->
      <!-- store  items-->
      <div class="row" class="store-items" id="store-items">
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="italiano">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Margherita</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="pikante">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Salami</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="pikante">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Pepperoni</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="sweeties beef">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza BBQ Kip </h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweeties">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Tropical</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="italiano">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Cajun</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="beef">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Slovenska</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="italiano">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Vegetariana</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Carbonara</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="beef">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Bolognese</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="sweeties">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Quattro Formaggi </h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="italiano">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo get_theme_file_uri("img/pizza-example.jpg"); ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Pizza Frutti di Mare</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->

      </div>
  </section>
  <!--end of store items -->

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
    <?php
    include 'footer.php';
    ?>