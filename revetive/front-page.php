 
<?php get_header();?>
<div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
    <?php $args = array(
          'cat' => 4,
          );
          $the_query = new WP_Query( $args ); ?>
                    
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
          <div class="hero-carousel-item">
            <img src="<?php the_post_thumbnail();?>" alt="">
            <div class="img-caption">
              <div class="subhead">We're design studio believe in ideas</div>
              <h1 class="mb-4">Creative Design</h1>
              <a href="<?php echo home_url() . '/Services';?>" class="btn btn-outline-light">Get Started</a>
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
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
  </header>

 <main>
<div class="page-section">

    <?php $args = array(
          'cat' => 2,
          );
          $the_query = new WP_Query( $args ); ?>
                    
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
          <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <div class="subhead"><?php the_excerpt();?></div>
            <h2 class="title-section">
                <!-- We are <span class="fg-primary">Professional Teams</span> to Growth your Business -->
                <?php the_title();?>
                </h2>

            <p><?php the_content();?></p>

            <a href="<?php the_permalink();?>" class="btn btn-primary mt-4">Read More</a>
          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="<?php the_post_thumbnail_url();?>" alt="asd">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    
                        <!-- pagination here -->
                    
                        <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

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

    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Our Teams</div>
          <h2 class="title-section">The Expert Team on ReveTive</h2>
        </div>

        <div class="owl-carousel team-carousel mt-5">
        <?php $args = array(
          'cat' => 6,
          'order' => 'ASC',
          'posts_per_page' => 3,

          );
          $the_query = new WP_Query( $args ); ?>
                    
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
          <div class="team-wrap">
            <div class="team-profile">
              <img src="<?php the_post_thumbnail_url();?>" alt="">
            </div>
            <div class="team-content">
              <h5><?php the_title();?></h5>
              <div class="text-sm fg-grey"><?php the_content();?></div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
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

    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Stay in touch</h2>
          <p>Just say hello or drop us a line. You can manualy send us email on <a href="mailto:example@mail.com">example@mail.com</a></p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
         
          <?php echo do_shortcode('[contact-form-7 id="117" title="Untitled" html_class="form-contact"]'); ?>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

 

  <?php get_footer();?>