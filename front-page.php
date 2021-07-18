<?php get_header(); ?>



          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Latest Posts</h3>
                </div>
              </div>
            </div>

      <div class="row">

              
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

                  <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'Flutter'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>

                    <div class="position-relative image-hover">
                                        <img class="illustration"
                    alt="flutter-tutorial" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                        <span class="thumb-title">FLUTTER</span>
                    </div>  
                  
                  <h5 class="font-weight-bold mt-3">
                    <?php the_title( ); ?>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                  <?php echo wp_trim_words( get_the_content(), 12 ); ?>

                  </p>
                  <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                
                <?php } ?>

            </div>
              
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

              <?php 

              $worldPosts = new WP_Query(array(

                'posts_per_page' => 1,
                'category_name' => 'WordPress'

              ));

              while ($worldPosts->have_posts()) {
                $worldPosts->the_post(); ?>

              <div class="position-relative image-hover">
                <img class="illustration"
                    alt="wordpress-tutorials" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                <span class="thumb-title">WORDPRESS</span>
              </div>  

              <h5 class="font-weight-bold mt-3">
                <?php the_title( ); ?>
              </h5>
              <p class="fs-15 font-weight-normal">
              <?php echo wp_trim_words( get_the_content(), 12 ); ?>

              </p>
              <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                >Read Article</a>

              <?php } ?>

            </div>
              
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

              <?php 

              $worldPosts = new WP_Query(array(

                'posts_per_page' => 1,
                'category_name' => 'PHP'

              ));

              while ($worldPosts->have_posts()) {
                $worldPosts->the_post(); ?>

              <div class="position-relative image-hover">
                <img class="illustration"
                    alt="php-tutorials" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                <span class="thumb-title">PHP</span>
              </div>  

              <h5 class="font-weight-bold mt-3">
                <?php the_title( ); ?>
              </h5>
              <p class="fs-15 font-weight-normal">
              <?php echo wp_trim_words( get_the_content(), 12 ); ?>

              </p>
              <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                >Read Article</a>

              <?php } ?>

            </div>
              
          <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

                <?php 

                $worldPosts = new WP_Query(array(

                  'posts_per_page' => 1,
                  'category_name' => 'Dart'

                ));

                while ($worldPosts->have_posts()) {
                  $worldPosts->the_post(); ?>

                <div class="position-relative image-hover">
                  <img class="illustration"
                    alt="dart-tutorials" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                  <span class="thumb-title">DART</span>
                </div>  

                <h5 class="font-weight-bold mt-3">
                  <?php the_title( ); ?>
                </h5>
                <p class="fs-15 font-weight-normal">
                <?php echo wp_trim_words( get_the_content(), 12 ); ?>

                </p>
                <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                  >Read Article</a>

                <?php } ?>

            </div>
          </div>
        </div>
          
          
          <div class="editors-news">
            
          <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Flutter Latest</h3>
                </div>
              </div>
            </div>
            
            <div class="row">
              
              <div class="col-lg-6  mb-5 mb-sm-2">

                <?php 

                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'Flutter'

                  ));

                  while ($worldPosts->have_posts()) {
                  $worldPosts->the_post(); ?>
                  <div class="position-relative image-hover">
                  <img class="illustration"
                    alt="flutter-tutorial" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>" />
                    <span class="thumb-title">FLUTTER</span>
                  </div>
                  <h1 class="font-weight-600 mt-3">
                    <?php the_title( ); ?>
                  </h1>
                  <p class="fs-15 font-weight-normal">
                    <?php echo wp_trim_words( get_the_content(), 30 ) ?>
                  </p>
                  <p>
                  <a href="<?php the_permalink( ); ?>">Continue Reading</a>
                  </p>
              </div>
              
              <?php } ?>
                            
              <div class="col-lg-6  mb-5 mb-sm-2">
                
                <div class="row">
                    <?php
                    
                    $polPosts = new WP_Query(array(
                      'posts_per_page' => 2,
                      'category_name' => 'WordPress'
                    ));

                    while ($polPosts->have_posts()) {
                      $polPosts->the_post(); ?>

                  
                  <div class="col-sm-6  mb-5 mb-sm-2">

                    <div class="position-relative image-hover">
                      <img class="illustration"
                    alt="wordpress-tutorial" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                      <span class="thumb-title">WORDPRESS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <?php the_title( ); ?>
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      <?php echo wp_trim_words( get_the_content(), 5 ) ?>
                    </p>
                    <p>
                      <a href="<?php the_permalink( ); ?>">Read More</a>
                    </p>

                    </div>
                  
                  <!-- // Picked up a chunk of code -->                 
                
                

                    <?php }
                    
                    ?>
                </div>    
                   

                  
                
                
                <div class="row mt-3">
                  
                  
                    
                  <?php
                    
                    $polPosts = new WP_Query(array(
                      'posts_per_page' => 2,
                      'category_name' => 'Dart'
                    ));

                    while ($polPosts->have_posts()) {
                      $polPosts->the_post(); ?>
                    <div class="col-sm-6  mb-5 mb-sm-2">

                    <div class="position-relative image-hover">
                      <img class="illustration"
                    alt="dart-tutorials" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                      <span class="thumb-title">PHP</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <?php the_title( ); ?>
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      <?php echo wp_trim_words( get_the_content(), 5 ) ?>
                    </p>
                    <p>
                      <a href="<?php the_permalink( ); ?>">Read More</a>
                    </p>
                    </div>
                    <?php }
                    
                    ?>

                </div>
              </div>
            
            
            </div>
          
          </div>
          
          
          
          
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">PHP AND WORDPRESS</h3>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-lg-9">
                <div class="row">

                <?php

                $lifePosts = new WP_Query(array(
                  'posts_per_page' => 3,
                  'category_name' => 'WordPress'
                ));

                while ($lifePosts->have_posts()) {
                  $lifePosts->the_post(); ?>

                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img class="illustration"
                    alt="bengali-news" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                      <span class="thumb-title">WORDPRESS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                    <a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a>
                    </h5>
                  </div>                
                <?php } ?>
                  
                
                  
                  <!-- // removed two chunks of code  -->
                
                
                </div>
                
                
                <div class="row mt-3">

                        <?php
                        
                        $intNews = new WP_Query(array(
                          'posts_per_page' => 3,
                          'category_name' => 'PHP'
                        ));

                        while ($intNews->have_posts()) {
                          $intNews->the_post(); ?>

                        <div class="col-sm-4 mb-5 mb-sm-2">
                          <div class="position-relative image-hover">
                            <img class="illustration"
                    alt="bengali-news" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                            <span class="thumb-title">PHP</span>
                          </div>
                          <h5 class="font-weight-600 mt-3">
                            <a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a>
                          </h5>
                        </div>

                       <?php } ?>
                
                </div>
              </div>
              
              
              <div class="col-lg-3">
                
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest Posts</h3>
                    </div>
                  </div>
                  <?php 

                  $newsPosts = new WP_Query(array(
                    'posts_per_page' => 8,
                    'category_name' => 'Flutter'
                  ));
                  
                  while ($newsPosts->have_posts()) {
                    $newsPosts->the_post(  ); ?>

                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        <a href="<?php the_permalink(); ?>">
							<?php the_title( ); ?>
						  </a>
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1"><?php ?><?php echo rand(1, 12); ?> minutes ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1"><?php echo rand(5, 200); ?></span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>

                  <?php } ?>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Flutter & Other Books</h3>
                </div>
              </div>
            </div>

        <div class="row">

              
            

                  <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 4,
                    'post_type' => 'book'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>
                
                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                        <img class="illustration"
                    alt="bengali-news" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>" />
                        <span class="thumb-title">BOOKS</span>
                    </div>  
                  
                  <h5 class="font-weight-bold mt-3">
                    <?php the_title( ); ?>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                  <?php echo wp_trim_words( get_the_content(), 12 ); ?>

                  </p>
                  <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>

                </div>  
                
                <?php } ?>

              
              
            

            </div>
          </div>
        </div>
        
      </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        

      <?php get_footer( ); ?>