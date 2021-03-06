<?php
/* Template Name: ana_music_portfolio_contact*/
?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/contact.css">
<?php get_header()?>

    <section class="Material-contact-section section-padding section-dar contact-form">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <?php
                if(have_posts()) :
                    while(have_posts()) : the_post(); ?>
                        <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                            <h1 class="section-title"><?php the_title(); ?></h1>
                        </div>


            </div>
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <p><?php the_content(); ?></p>
                </div>
                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                        <!-- Name -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- email -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Message -->
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Message</label>
                            <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Form Submit -->
                        <div class="form-submit mt-5">
                            <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
                    <?php endwhile;
                else :
                    echo '<div><p>No content found</p></div>';
                endif;
?>

<?php get_footer();?>