<?php 
/**
 * Template Name: No Sidebar
 */
get_header();
?>
<!-- CONTENT START -->
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 

                        the_content();

                    } // end while
                } // end if
                ?>
                </div>            
            </div>
        </div>
    </section>
<!-- /CONTENT END -->
<?php get_footer(); ?>