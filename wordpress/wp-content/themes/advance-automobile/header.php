<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package Advance Automobile
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'advance-automobile' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_automobile_preloader_option',true)!= '' || get_theme_mod('advance_automobile_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent" ><?php esc_html_e( 'Skip to content', 'advance-automobile' ); ?></a>
    <div id="header">
      <?php if( get_theme_mod('advance_automobile_display_topbar') != ''){ ?>
        <div class="top-header">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="mail">
                  <?php if( get_theme_mod('advance_automobile_mail1') != ''){ ?>
                    <i class="fas fa-envelope"></i><span><?php echo esc_html( get_theme_mod('advance_automobile_mail1','')); ?></span>
                  <?php } ?>
                </div>
              </div>
              <div class="col-lg-6 col-md-5">
                <div class="social-icons">
                  <?php if( get_theme_mod( 'advance_automobile_facebook_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','advance-automobile' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'advance_automobile_twitter_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','advance-automobile' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'advance_automobile_youtube_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','advance-automobile' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'advance_automobile_linkedin_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_attr_e( 'Linkedin','advance-automobile' );?></span></a>
                  <?php } ?>
                </div>
              </div>
              <div class="col-lg-2 col-md-3">
                <div class="book-btn">
                  <?php if ( get_theme_mod('advance_automobile_book1','') != "" ) {?>
                    <a href="<?php echo esc_url(get_theme_mod('advance_automobile_book')); ?>"><?php echo esc_html(get_theme_mod('advance_automobile_book1','')); ?><span class="screen-reader-text"><?php esc_attr_e( 'Bookbtn','advance-automobile' );?></span></a>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="main-menu <?php if( get_theme_mod( 'advance_automobile_sticky_header', false) != '' || get_theme_mod( 'advance_automobile_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-9">
              <div class="logo">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php else: ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                    <p class="site-description">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php endif; ?>
              <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-3">
              <div class="toggle-menu mobile-menu">
                <button class="mobiletoggle" onclick="advance_automobile_resmenu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-automobile'); ?></span></button>
              </div>
              <div id="menu-sidebar" class="nav sidebar">
                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-automobile' ); ?>">
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  ?>
                  <div id="contact-info">
                    <div class="mail">
                      <?php if( get_theme_mod('advance_automobile_mail1') != ''){ ?>
                        <i class="fas fa-envelope"></i><span><?php echo esc_html( get_theme_mod('advance_automobile_mail1','')); ?></span>
                      <?php } ?>
                    </div>
                    <?php get_search_form();?>
                    <div class="book-btn">
                      <?php if ( get_theme_mod('advance_automobile_book1','') != "" ) {?>
                        <a href="<?php echo esc_url(get_theme_mod('advance_automobile_book')); ?>"><?php echo esc_html(get_theme_mod('advance_automobile_book1','')); ?><span class="screen-reader-text"><?php esc_attr_e( 'Bookbtn','advance-automobile' );?></span></a>
                      <?php }?>
                    </div>
                    <div class="social-icons">
                      <?php if( get_theme_mod( 'advance_automobile_facebook_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','advance-automobile' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_automobile_twitter_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','advance-automobile' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_automobile_youtube_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','advance-automobile' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_automobile_linkedin_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_automobile_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_attr_e( 'Linkedin','advance-automobile' );?></span></a>
                      <?php } ?>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="advance_automobile_resmenu_close()"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-automobile'); ?></span></a>
                </nav>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-6">
              <div class="search-box">
                <button type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-body">
                <div class="serach_inner">
                  <?php get_search_form(); ?>
                </div>
              </div>
              <button type="button" class="closepop" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>