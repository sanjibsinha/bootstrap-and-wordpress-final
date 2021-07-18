<?php get_header( ); ?>
<main class="container">
  <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
      <?php
      /*
      if (is_author()) {
          echo "Posts by "; the_author( );
      }
      if (is_category()) {
          single_cat_title( );
      }
      */
      the_archive_title( );
      ?>
      </h1>
      <div class="page-banner__intro">
        <p><?php the_archive_description( ); ?></p>
      </div>
    </div>  
  
  <div class="row g-5">
    <div class="col-md-8">

    <?php 
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
    <h1 class="headline headline--medium headline--post-title">
		<?php the_title(); ?></h1>
    </div>
    <div class="metabox">
    <h4>Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    <?php echo get_the_category_list(', '); ?>
    </h4>
    </div>
    <div class="generic-content">
    <?php the_excerpt(); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">
    Continue Reading &raquo;</a>    
    </p><p></p>
    </div>

  <?php
  }
  echo paginate_links(  );
  ?>
      

      

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h2 class="fst-italic">About Sanjib</h2>
          <p class="mb-0">
			Sanjib Sinha is a full time writer who has written six books for Apress; he also publishes a few at Leanpub and Amazon to share his learning-experience.
			</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Support Open Source</h4>
          <ol class="list-unstyled mb-0">
            <li><script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="sanjibsinha" data-color="#5F7FFF" data-emoji="📖"  data-font="Cookie" data-text="Buy me a book" data-outline-color="#000000" data-font-color="#ffffff" data-coffee-color="#FFDD00" ></script></li>
            
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="https://github.com/sanjibsinha/">GitHub</a></li>
            <li><a href="https://twitter.com/sanjibsinha/">Twitter</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  

	</div>
</main>

<?php get_footer( ); ?>
