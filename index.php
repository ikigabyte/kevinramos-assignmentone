<?php get_header(); ?>
<!-- CONTENT START -->
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); 
                        the_title( '<h2><a href="' . get_permalink() .'">', '</a></h2>' ); 
                        the_post_thumbnail(); 
                        the_excerpt();
                    endwhile; 
                else: 
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                endif; 
                ?>
                </div>
            </div>
        </div>
    </section>
<!-- /CONTENT END -->
<?php get_footer(); ?>