<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <section id="slider">
    <div class="owl-carousel">
      <?php
        $slider_category=  get_theme_mod('cyber_security_services_post_setting');if($slider_category){
        $page_query = new WP_Query(array( 'category_name' => esc_html($slider_category ,'cyber-security-services')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
          <div class="slide-box">
            <?php the_post_thumbnail(); ?>
            <div class="slide-inner-box">
              <?php if( get_theme_mod('cyber_security_services_slide_heading') != ''){ ?>
                <h3><?php echo esc_html(get_theme_mod('cyber_security_services_slide_heading','')); ?></h3>
              <?php }?>
              <h2 class="slider-title"><?php the_title();?></h2>
              <p class="mb-0"><?php echo esc_html(wp_trim_words(get_the_content(),'30') );?></p>
              <div class="home-btn text-center text-md-left my-4">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Get Start Now','cyber-security-services'); ?></a>
              </div>
            </div>
          </div>
          <?php endwhile;
        wp_reset_postdata();
      }?>
    </div>
  </section>

  <section id="home-about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 align-self-center pr-0">
              <?php if( get_theme_mod('cyber_security_services_about_images') != ''){ ?>
                <img class="mb-3 mb-md-0" src="<?php echo esc_url(get_theme_mod('cyber_security_services_about_images','')); ?>">
              <?php }?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
              <?php if( get_theme_mod('cyber_security_services_about_images1') != ''){ ?>
                <img class="mb-3" src="<?php echo esc_url(get_theme_mod('cyber_security_services_about_images1','')); ?>">
              <?php }?>
              <?php if( get_theme_mod('cyber_security_services_about_images2') != ''){ ?>
                <img class="mb-3 mb-md-0" src="<?php echo esc_url(get_theme_mod('cyber_security_services_about_images2','')); ?>">
              <?php }?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
          <?php if( get_theme_mod('cyber_security_services_services_heading') != ''){ ?>
            <h3><?php echo esc_html(get_theme_mod('cyber_security_services_services_heading','')); ?></h3>
          <?php }?>
          <?php
            $mod =  get_theme_mod( 'cyber_security_services_about_us_settigs');
            if ( 'page-none-selected' != $mod ) {
              $cyber_security_services_about_page[] = $mod;
            }
            if( !empty($cyber_security_services_about_page) ) :
            $args = array(
              'post_type' =>array('page'),
              'post__in' => $cyber_security_services_about_page
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
          ?>
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <h4 class="mb-4"><?php the_title();?></h4>
            <p class="mb-0"><?php the_excerpt(); ?></p>
            <div class="home-btn text-center text-md-left my-4">
              <a href="<?php the_permalink(); ?>"><?php esc_html_e('Get The Service','cyber-security-services'); ?></a>
            </div>
          <?php endwhile;
          wp_reset_postdata();?>
          <?php else : ?>
          <div class="no-postfound"></div>
            <?php endif;
          endif;?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>