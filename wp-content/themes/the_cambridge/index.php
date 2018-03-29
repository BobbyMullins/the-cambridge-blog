<?php get_header(); ?>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-8'>
                            <div id="posts">

                                <?php

                                if ('have_posts' ()){
                                    while('have_posts' ()){
                                        the_post();

                                        get_template_part('partials/post/content-excerpt');                                  

                                     }
                                  }

                                ?>

                                <div class="entry-title">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i><?php echo get_the_date(); ?></li>
                                    <li><a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><i class="icon-user"></i> <?php the_author(); ?></a></li>
                                    <li><i class="icon-folder-open"></i><?php the_category(' '); ?></li>
                                </ul>
                                <div class="entry-content">
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
                                </div>
                            </div> 
                            <!-- Pagination
                            ============================================= -->
                            <div class="post-navigation clearfix">
                                    <p class='more-link'>Next Post:</p> <em><?php next_post_link(); ?></em>

                                    <?php previous_post_link(); ?>
                            </div><!-- .post-navigation end -->
                        </div><!-- column 6 -->

                        <?php get_sidebar(); ?>
                        
                </div><!-- row end -->
            </div><!-- container fluid -->

<?php get_footer(); ?>

