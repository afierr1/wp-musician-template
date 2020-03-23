<?php get_header();?>
    <div class="container-fluid front-header-page text-center">
        <div class="my-slider">
            <div>
                <h1><?php bloginfo('Name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
            <div>
                <h1>Hello</h1>
                <h2>I am testing</h2>
            </div>
            <div>
                <h1>Another Test</h1>
                <h2>Isn't this slider cool??</h2>
            </div>
        </div>
        <button id="start-button">
            <a href="#front-content">Learn More</a>
        </button>
    </div>
    <div id="front-content" class="container-fluid" style="padding-top: 2em">
        <div class="text-block">
            <?php
            if(have_posts()) :
                while(have_posts()) : the_post(); ?>
                    <h2 class="text-center"><?php the_title();?></h2>
                    <p><?php the_content();?></p>
                <?php endwhile;
            else :
                echo '<div><p>No content found</p></div>';
            endif;
            ?>

        </div>

    </div>
<?php get_footer();?>