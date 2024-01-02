<?php



function load_stylesheets()
{
        
    wp_register_style("stylesheet", get_template_directory_uri() . "/style.css", "", 1, "all");
    wp_enqueue_style("stylesheet");

    wp_register_style("custom", get_template_directory_uri() . "/app.css", "", 1, "all");
    wp_enqueue_style("custom");

}
add_action("wp_enqueue_scripts", "load_stylesheets");





function load_javascript()
{
        wp_register_script("custom", get_template_directory_uri() . "/app.js", "jquery", 1, "true");
        wp_enqueue_script("custom");
}
add_action("wp_enqueue_scripts", "load_javascript");



//Add menus
add_theme_support("menus");


//Register some menus
register_nav_menus(

    array(
            "top-menu" => "Top Menu",
    )
);




function add_custom_admin_bar_menu( $wp_admin_bar ) {
    // Add a custom parent menu item
    $wp_admin_bar->add_menu( array(
        'id'    => 'products',
        'title' => 'products',
        'href'  => '#',
    ));

    // Add child items under the custom menu
    $wp_admin_bar->add_menu( array(
        'parent' => 'products',
        'id'     => 'shoes-1',
        'title'  => 'shoes',
        'href'   => '#',
    ));
    $wp_admin_bar->add_menu( array(
        'parent' => 'products',
        'id'     => 'pants-2',
        'title'  => 'pants',
        'href'   => '#',
    ));
}
add_action( 'admin_bar_menu', 'add_custom_admin_bar_menu', 999 );
