<!DOCTYPE html>
<html lang="<?php language_attributes( 'en' ); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/vendors/aos/dist/aos.css/aos.css" />
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
    <!-- endinject -->
	  <style>
		 
		  .illustration {
			  width: 100%;
		  }
		  
		  .page {
  display: flex;
  flex-wrap: wrap;
}

.section {
  width: 100%;
  height: 500px;
	padding-bottom: 1rem;
    margin-top: -1px;
  display: flex;
  justify-content: center;
  align-items: center;
}


		  
	  </style>
    <?php wp_head(  ); ?>
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li><?php echo get_the_date( ); ?></li>
                  
                </ul>
                <div>
                  <a class="navbar-brand" href="<?php echo site_url( '/' ); ?>"
                    ><h1 class="font-weight-600 mt-3">Sanjib Sinha | Articles Everyday</h1></a>
                    <p>
                      Flutter, WordPress, PHP and Dart Tutorials & Books for All Learners
                    </p>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      
                    </li>
                   
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="https://twitter.com/sanjibsinha">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="<?php echo site_url( '/' ); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/blog' ); ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/about-us' ); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/category/flutter' ); ?>">Flutter</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/category/dart' ); ?>">Dart</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/category/php' ); ?>">PHP</a>
                    </li>
					  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/category/wordpress' ); ?>">WordPress</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url( '/book/' ); ?>">Books</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>
        
        <div class="container">
          
              
            