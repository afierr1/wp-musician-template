<?php
/**
 * Created by PhpStorm.
 * User: aniat
 * Date: 3/17/2020
 * Time: 9:29 PM
 */
/**
 * ==========================
 * Create Main Navigation Bar
 * ==========================
 */

function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function get_nav() {

$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['header-menu'];
$primaryNav = wp_get_nav_menu_items($menuID);

foreach ($primaryNav as $navItem) {
echo '<li class="nav-item">';
    echo '<a class="nav-link link-animate" href="';
    echo $navItem->url.'">';
        echo $navItem->title;
        echo '<span class="sr-only">(current)</span>';
        echo '</a>';
    echo '</li>';
}
}
add_action('header','get_nav');
?>