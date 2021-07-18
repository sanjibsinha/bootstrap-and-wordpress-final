<?php get_header( ); ?>
<main class="container">
  
  <div class="row g-5">
    <div class="col-md-8">

    <?php while(have_posts()) {
        the_post(); ?>
        <h1 class="pb-4 mb-4 fst-italic border-bottom">
        <?php the_title(); ?>
      </h1>
      
      <p class="blog-post-meta">
          
          Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    <?php echo get_the_category_list(', '); ?>
        </p>
		<p>
			
		</p><p>
		
		</p>
        
<div class="page section">
	
		<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?>
	
	</div>	
	
	<p>
			
		</p><p>
		
		</p>	
      <article class="blog-post">
        <?php the_content(); ?>
      </article>

    <?php } ?>
      

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

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
  

</main>

<?php get_footer( ); ?>