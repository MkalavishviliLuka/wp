<?php get_header();?>
<?php
$pagesArrContact = array(50);

if(is_page($pagesArrContact)){
    get_template_part('template-parts','Services');
}
?>
<?php $args = array(
          'cat' => 9,
          'posts_per_page' => 1,

          );
          $the_query = new WP_Query( $args ); ?>
                    
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              

<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(<?php echo the_post_thumbnail_url();?>)">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center"><?php the_title();?></h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    
                        <!-- pagination here -->
                    
                        <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
  </header>

  <main>
  <div class="page-section">
      <div class="container">
        <div class="text-center">

          <div class="subhead">Our Services</div>
          <h2 class="title-section">See what can we do for your Projects</h2>
        </div>

        <div class="row justify-content-center">
        <?php $args = array(
          'cat' => 5,
          'order' => 'ASC',
          'posts_per_page' => 8,

          );
          $the_query = new WP_Query( $args ); ?>
                    
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="<?php the_post_thumbnail_url();?>">
              </div>
              <h5><?php the_title();?></h5>
            </div>
          </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    
                        <!-- pagination here -->
                    
                        <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Testimonials -->
    <div class="page-section">
      <div class="container">
        <div class="testimonials">
          <h2 class="title-section">Testimonials</h2>
        </div>
        <div class="owl-carousel testimonial-carousel">
        <?php $args = array(
          'cat' => 7,
          'order' => 'ASC',
          'posts_per_page' => 6,

          );
          $the_query = new WP_Query( $args ); ?>
                    
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
          <div class="card-testimonial">
            <div class="content">
                <?php the_content(); ?>
        </div>
            <div class="author">
              <div class="avatar">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name"><?php the_title(); ?></div>
                <div class="author-info"><?php the_excerpt(); ?></div>
              </div>
            </div>
          </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    
                        <!-- pagination here -->
                    
                        <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-section -->

 
  </main>

<?php get_footer();?>