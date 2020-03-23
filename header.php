<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?> : <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/js/slick/slick-theme.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-bg">
    <a class="navbar-brand" style="font-size: 70px;"href="#"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php get_nav();?>
        </ul>
        <ul class="navbar-nav" style="margin-left: 20px">
            <li class=""><a class="icon-list link-animate" href="#"><i class="fab fa-facebook"></i></a></li>
            <li class=""><a class="icon-list link-animate" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class=""><a class="icon-list link-animate" href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
</nav>

<?php wp_head();?>