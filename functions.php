<?php

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['video', 'audio', 'gallery', 'aside']);
add_theme_support('custom-logo');
register_sidebar([
    'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'description' => 'this is a blog sidebar',
]);
register_sidebar([
    'name' => 'Footer Widgets1',
    'id' => 'footer-widgets1',
    'description' => 'this is a Footer Widgets1',
]);
register_sidebar([
    'name' => 'Footer Widgets3',
    'id' => 'footer-widgets2',
    'description' => 'this is a Footer Widgets2',
]);
register_sidebar([
    'name' => 'Footer Widgets3',
    'id' => 'footer-widgets3',
    'description' => 'this is a Footer Widgets3',
]);
register_sidebar([
    'name' => 'Footer Widgets4',
    'id' => 'footer-widgets4',
    'description' => 'this is a Footer Widgets4',
]);

register_nav_menu('main-menu', 'Main Menu');
register_nav_menu('footer-menu', 'Footer Menu');
register_nav_menu('mobile-menu', 'Mobile Menu');

register_nav_menus([
    'top-menu' => 'Top Menu',
    'main-nav' => 'Main Nav Menu',
]);

register_post_type('team', [
    'public' => true,
    'supports' => ['title', 'editor', 'category', 'thumbnail'],
    'labels' => [
        'name' => 'Team Member',
        'all_items' => 'All members',
        'add_new' => 'Add new member',
    ],
    'menu_icon' => 'dashicons-groups',
]);

register_post_type('books', [
    'public' => true,
    'supports' => ['title', 'editor', 'category', 'thumbnail'],
    'labels' => [
        'name' => 'Books',
        'all_items' => 'All Books',
        'add_new' => 'Add New Books',
    ],
    'menu_icon' => 'dashicons-book-alt',
]);
register_post_type('award', [
    'public' => true,
    'menu_icon' => 'dashicons-awards',
    'supports' => ['title', 'editor', 'category', 'thumbnail'],
    'labels' => [
        'name' => 'Awards',
        'all_items' => 'All Awards',
        'add_new' => 'Add New Awards',
    ],
]);

register_post_type('ap', [
    'public' => true,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'supports' => ['title', 'editor', 'category', 'thumbnail'],

    'labels' => [
        'name' => 'Appriciations',
        'all_items' => 'All Applications',
        'add_new' => 'Add New Applications',
        'add_new_item' => 'Add New Applications',
        'featured_image' => 'Set Applications Image',
        'set_featured_image' => 'Set Applications Image',
        'remove_featured_image' => ' Remove Applications Image',
    ],
    'menu_position' => 25,
]);

register_taxonomy('aptc', 'ap', [
    'public' => true,
    'hierarchical' => true,
]);
register_taxonomy('apt', 'ap', [
    'public' => true,
]);

?>