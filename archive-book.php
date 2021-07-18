<?php

get_header(); ?>
<main class="container">

<!-- <div class="page-banner"> -->
  
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Flutter Books</h1>
    <div class="page-banner__intro">
      
    </div>
  </div>  


<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="event-summary">
      <a class="event-summary__date t-center" href="#">
        <span class="event-summary__month"><?php echo " (Month) " . the_time( 'm' ) ?></span>
              <span class="event-summary__day"><?php echo " (Date) " . the_time( 'd' ) ?></span>
		</a>
		  
      <p>
		  <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
		</p>
      <h1 class="font-weight-600 mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php echo wp_trim_words( get_the_content(), 7 ) ?> 
        <p>
        <a href="<?php the_permalink(); ?>" class="nu gray">
        Continue Reading...
      </a>

        <p>
			
		</p>
		<hr>
      
    </div>
  <?php }
  echo paginate_links();
?>

  

	</div>
</main>

<?php get_footer();

?>