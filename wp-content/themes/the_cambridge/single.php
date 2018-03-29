<?php get_header(); ?>
			<div class="container clearfix">

                <!-- Post Content
                  ============================================= -->
                    <div class='row'>
                        <div class='col-md-8'>

                    <div class="single-post nobottommargin">
                        
                        <?php
                        
                            if('have_posts'()){
                                while('have_posts'()){
                                    the_post();
                                    
                                    $author_ID          = get_the_author_meta ('ID'); 
                                    $author_url         = get_author_posts_url( $author_ID ); 
                                    
                        ?>
                        
                                                <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <h2><?php the_title(); ?></h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i><?php echo get_the_date(); ?></li>
                                <li>
                                    <a href="<?php echo $author_url; ?>">
                                        <i class="icon-user"></i> <?php the_author(); ?>
                                    </a>
                                </li>
                                <li><i class="icon-folder-open">
                                        <?php the_category(''); ?>
                                    </i> 
                                </li>
                            </ul><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <?php
                              if ('has_post_thumbnail'()){
                            ?> 
                            
                                <div class="entry-image">
                                    <a href="<?php the_permalink(); ?>">    
                                        <?php the_post_thumbnail('full');?>
                                    </a>
                                </div><!-- .entry-image end -->
                            
                            <?php
                                  
                              } 
                                        
                            ?>

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">
                                
                                <?php 
                                
                                    the_content(); 
                                    
                                ?>

                                <!-- Tag Cloud
                                ============================================= -->
                                <div class="tagcloud clearfix bottommargin">
                                    <?php the_tags('', ''); ?>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>

                            </div><!-- end entry-content notopmargin -->
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->
                        <div class="post-navigation clearfix">

                            <div class="col_half nobottommargin">
                                <?php next_post_link(); ?>
                            </div>

                            <div class="col_half col_last tright nobottommargin">
                                <?php previous_post_link(); ?>
                            </div>

                        </div><!-- .post-navigation end -->

                        <div class="line"></div>

                        <!-- Post Author Info
                        ============================================= -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Posted by <span><a href="<?php echo $author_url; ?>"><?php the_author(); ?></a></span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="author-image">
                                    <?php echo get_avatar($author_ID, 90, '', false, array('class' => 'img-circle')); ?>
                                </div>
                                
                                <?php echo get_the_author_meta('description'); ?>
                            </div>
                        </div><!-- Post Single - Author End -->

                        <div class="line"></div>

                        <h4>Related Posts:</h4>

                        <div class="related-posts clearfix">
                            
                            <?php
                                    
                                $rp_query               =   new WP_Query(array(
                                    'posts_per_page'    =>  2,
                                    'post__not_in'      =>  array( $post->ID ),
                                    'cat'               =>  !empty($categories) ? $categories[0]->term_id : null
                                )); 
                                    
                                if($rp_query->have_posts()){
                                    while($rp_query->have_posts()){
                                        $rp_query->the_post(); 
                                    }
                                    
                                    wp_reset_postdata(); 
                                    
                                    ?>
                            
                                    <div class='mpost'>
                                        
                                        <?php
                                        
                                            if(has_post_thumbnail()){
                                                
                                            ?>
                                        
                                                <div class="entry-image">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail(array('thumbnail')); ?>
                                                    </a>
                                                </div>
                                        
                                            <?php
                                                
                                            }
                                        
                                        ?>
                                        
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li>
                                                    <i class="icon-calendar3">
                                                    </i>
                                                    <?php echo get_the_date(); ?>
                                                </li>
                                            </ul>
                                            <div class="entry-content"><?php the_excerpt(); ?></div>
                                        </div>                           
                                    </div>
                                    
                                    <?php

                                    } 

                                ?>

                        </div><!-- end related posts clearfix -->

                    </div><!-- end singlepost nobottommargin -->
                        
                        <?php
                                }
                            }

                        ?>
                    </div><!-- col 8 -->
                    <?php get_sidebar(); ?>   
                </div><!-- row -->

            </div> container clearfix 

<?php get_footer(); ?>

