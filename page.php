<?php get_header();?>
    <div class="container-fluid header-page text-center">
    </div>
<div class="container-fluid" style="padding: 90px 50px 0px 50px">
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