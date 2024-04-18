<?php get_header(); 

    while(have_posts()) {
        the_post(); ?>
        <div class='banner-container'>
            <div class='banner-content'>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php }

get_footer();

?>