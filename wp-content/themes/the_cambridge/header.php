<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Stylesheets
	============================================= -->
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body <?php body_class('no-transition stretched'); ?> >

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
	<!-- Top Bar
		============================================= -->
	<div id="top-bar" class="dark">

		<div class="container clearfix">

			<div class="col_half nobottommargin">
			</div>

			<div class="col_half fright col_last nobottommargin">

				<!-- Top Social
                ============================================= -->
				<div id="top-social">
					<ul>
                        <?php
                        
                            if(get_theme_mod('ju_facebook_handle')){
                                
                            ?>
                                
                                <li><a href="https://facebook.com<?php echo get_theme_mod('ju_facebook_handle'); ?>" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>    
                        
                            <?php
                            }
                        
                        ?>
						<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
						<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
						<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
						<li><a href="mailto:info@email.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@email.com</span></a></li>
					</ul>
				</div><!-- #top-social end -->

			</div>

		</div>

	</div><!-- #top-bar end -->

	<!-- Header
    ============================================= -->
	<header id="header" class="sticky-style-2">

		<div class="container clearfix">

			<!-- Logo
            ============================================= -->
			<div id="logo">
                <?php
                
                    if (has_custom_logo()){
                        the_custom_logo(); 
                    }else {
                        
                    ?>
                
                        <a href='<?php echo home_url('/'); ?>' class='standard-logo'><?php bloginfo('name'); ?></a>
                
                    <?php
                        
                    }
                
                ?>
                
			</div><!-- #logo end -->

			<div class="top-advert">
				<?php if (function_exists('quads_ad')){
                
                    echo quads_ad(array('location' => 'udemy_header'));             
    
                }
                
                ?>
                
			</div>

		</div>

		<div id="header-wrap">

			<!-- Primary Navigation
            ============================================= -->
			<nav id="primary-menu" class="style-2">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <?php
                        if(has_nav_menu('primary')){
                            wp_nav_menu(array(
                                'theme_location'        => 'primary', 
                                'container'             => false, 
                                'fallback_cb'           => false, 
                                'depth'                 => 4
                            )); 
                        }
                    ?>

					<!-- Top Search
                    ============================================= -->
					<div id="top-search">
						<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
						<form action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
						</form>
					</div><!-- #top-search end -->

				</div>

			</nav><!-- #primary-menu end -->

		</div>

	</header><!-- #header end -->