 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Photolite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css" type="text/css" media="screen" />
</head>

<body <?php body_class(); ?>>
			<div class="header">
            		<div class="header-inner">
                    		<div class="logo">
                            		<?php photolite_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo $description; ?></p>
					<?php endif; ?>
                             </div>
                             <div class="toggle">
                            	<a class="toggleMenu" href="#"><?php esc_html_e('Menu','photolite'); ?></a>
                            </div>                           
                            <div class="nav">
								<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div><!-- nav --><div class="clear"></div>
                    </div><!-- header-inner -->
            </div><!-- header -->
            <?php $hideslide = get_theme_mod('hide_slider', '1'); ?>
		<?php if($hideslide == ''){ ?>
    <div class="slider-main">
       <?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, true) != "" ) {
					$imgSrc 	= esc_url(get_theme_mod('slide_image'.$i, true));
					$imgTitle	= esc_attr(get_theme_mod('slide_title'.$i, true));
					$imgDesc	= esc_attr(get_theme_mod('slide_desc'.$i, true));
					$imglink	= esc_url(get_theme_mod('slide_link'.$i, true));
					if ( strlen($imgSrc) > 10 ) {
						$slAr[$m]['image_src'] = esc_url(get_theme_mod('slide_image'.$i, true));
						$slAr[$m]['image_title'] = esc_attr(get_theme_mod('slide_title'.$i, true));
						$slAr[$m]['image_desc'] = esc_attr(get_theme_mod('slide_desc'.$i, true));
						$slAr[$m]['image_url'] = esc_url(get_theme_mod('slide_link'.$i, true));
						$m++;
					}
				}
				
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php if ( ($sv['image_title']!='') && ($sv['image_desc']!='')) { echo '#slidecaption'.$n ; } ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="top-bar">
                        <?php if( get_theme_mod('slide_title'.$sln, true) != '' ){ ?>
                            <h2><?php echo esc_attr(get_theme_mod('slide_title'.$sln, true)); ?></h2>
                        <?php } ?>
                        <?php if( get_theme_mod('slide_desc'.$sln, true) != '' ){ ?>
                            <p><?php echo esc_attr(get_theme_mod('slide_desc'.$sln, true)); ?></p>
                        <?php } ?>
						<?php if( get_theme_mod('slide_link'.$sln, true) != ''){ ?>
                        	<a class="read-more" href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,true)); ?>"><?php esc_html_e('Learn More','photolite'); ?></a>
                        <?php } ?>
                    </div>
                    </div><?php 
                } ?>
                
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </div>
        <?php } ?>
        <?php if(is_front_page()) { ?>
        <div class="services">
        	<?php for($f=1; $f<5; $f++) { ?>
         <?php if(get_theme_mod('page-setting'.$f) != '') { ?>
         	<?php $page_query = new WP_Query('page_id='.get_theme_mod('page-setting'.$f)); ?>
         		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                      <div id="services-box">
                      		<?php 	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
									$url = $thumb['0'];
							?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php if(has_post_thumbnail()) { echo $url; } else { echo esc_url(get_template_directory_uri().'/images/no-image.jpg'); } ?>"></a>
                      </div><?php if( $f%4==0) { ?><div class="clear"></div><?php } ?> 
                 <?php endwhile; ?>
         <?php } } ?>

         </div><!-- services -->
         <?php } ?>
      </div><!-- slider -->



      <div class="main-container">
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>