<?php get_header(); 

    while('have_posts'()){
        the_post(); 
        
        
?>

<!-- Page Title
============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1><?php the_title(); ?></h1>
            
            <?php
            
                if (function_exists('the_subtitle')){
                    
            ?>
                    
                    <span><?php the_subtitle(); ?></span>
            
            <?php
                    
                }
            
            ?>
            
        </div>

    </section><!-- #page-title end -->
    
<?php

    }

    rewind_posts();

?>

<!-- Content
============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
			</div>

			<div class="container clearfix">

                <!-- Post Content
                  ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">
                        
                        <?php
                        
                            while('have_posts'()){
                                the_post();
                                    
                                $author_ID          = get_the_author_meta ('ID'); 
                                $author_url         = get_author_posts_url( $author_ID ); 
                                    
                        ?>
                        
                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">


                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">
                                
                                <?php 
                                
                                    the_content(); 
                                    
                                ?>
                            </div>

                        
                        <!-- Comments Function - DISABLED 
                        ========================================= -->
                        
                        </div><!-- entry clearfix -->

                    </div><!-- end singlepost nobottommargin -->

                </div><!-- end postcontent nobottommargin clearfix -->
                        
                        <?php
                                
                            }

                        ?>
        
                <?php get_sidebar(); ?>

            </div><!-- container clearfix -->
        </div><!-- end content wrap -->
	</section><!-- #content end -->

<?php get_footer(); ?>

