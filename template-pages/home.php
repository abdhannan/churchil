<?php
/**
 * Template Name: Home page
 */


 get_header();
?>

<br><br>

<div class="page-wrapper">
  <div class="fancy-title">
    <div class="fancy-title__main">
      <div class="containe">
        <h1><?php echo the_field('background_title'); ?></h1>
      </div>
    </div>
    <div class="container">
      <div class="fancy-title__sub">
        <span><?php echo the_field('sub_title'); ?></span>
        <h2><?php echo the_field('sub_heading'); ?></h2>
      </div>
    </div>
  </div>
  <!-- fancy-title -->

  <section class="event-slider">
    <div class="container">
      <div class="event-slider__wrapper">
        <div class="event-slider__wrapper__float">
          <div class="event-slider__wrapper__float__label">
            <span>EVENTS</span>
          </div>
          <div class="event-slider__wrapper__float__arrow">
            <a class="prev-event" href="#"><i class="fa fa-arrow-left"></i></a>
            <a class="next-event" href="#"><i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- float -->

        <div class="slider">
        
        <?php
        /**
         * Loop the event custom post type
         */
        $args = array(
            'post_type' => 'event',   
        );
        $loop_events = new WP_Query($args);
        if ($loop_events->have_posts()) :
        while ($loop_events->have_posts()) :
            $loop_events->the_post();
        ?>
          <div class="event-slider__wrapper__content">
            <div class="event-slider__wrapper__content__image">
              <img
                src="<?php the_post_thumbnail_url( 'full' ); ?>"
                alt="<?php the_title(); ?>"
              />
            </div>

            <div class="event-slider__wrapper__content__details">
              <div class="event-slider__wrapper__content__details__label">
                <p>Featured Events</p>
              </div>
              <h2><?php the_title(); ?></h2>
              <span><?php the_date(); ?></span>
              <p>
                <?php the_excerpt(); ?>
              </p>
              <div class="event-slider__wrapper__content__details__action">
                <a href="<?php the_permalink(); ?>" class="btn-border">View Event</a>
                <a href="#" class="btn-primary">All Events</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
          <!-- slider wrapper content -->

         
        </div>
      </div>
    </div>
  </section>



  <!-- news slider -->
  <section class="event-slider news">
    <div class="container">
      <div class="event-slider__wrapper">
        <div class="event-slider__wrapper__float">
          <div class="event-slider__wrapper__float__label">
            <span>NEWS</span>
          </div>
          <div class="event-slider__wrapper__float__arrow">
            <a class="prev-news" href="#"><i class="fa fa-arrow-left"></i></a>
            <a class="next-news" href="#"><i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- float -->

        <div class="slider-news">
        
        <?php
        /**
         * Loop the event custom post type
         */
        $args = array(
            'post_type' => 'post',   
        );
        $loop_events = new WP_Query($args);
        if ($loop_events->have_posts()) :
        while ($loop_events->have_posts()) :
            $loop_events->the_post();
        ?>
          <div class="event-slider__wrapper__content">

            <div class="event-slider__wrapper__content__details">
              <div class="event-slider__wrapper__content__details__label">
                <p>Featured Articles</p>
              </div>
              <h2><?php the_title(); ?></h2>
              <span><?php the_date(); ?></span>
              <p>
                <?php the_excerpt(); ?>
              </p>
              <div class="event-slider__wrapper__content__details__action">
                <a href="<?php the_permalink(); ?>" class="btn-border">Read Post</a>
                <a href="#" class="btn-primary">All News</a>
              </div>
            </div>

            <div class="event-slider__wrapper__content__image">
              <img
                src="<?php the_post_thumbnail_url( 'full' ); ?>"
                alt="<?php the_title(); ?>"
              />
            </div>

            
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
          <!-- slider wrapper content -->

         
        </div>
      </div>
    </div>
  </section>
</div>


<br><br>

<?php get_footer(); ?>
