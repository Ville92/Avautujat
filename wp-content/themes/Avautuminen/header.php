<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fonts/foundation-icons.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
</head>

<body <?php body_class(); ?>>
    <div class="main-container">
<header class="main-header">
    <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
        </a>
    </div>
    <div class="categories">
        <?php get_sidebar(); ?>
    </div>
    <div class="search-block-header">
        <button type="submit" id="searchsubmitmobile" value="Hae"><i class="fi-magnifying-glass large"></i></button>
    </div>
    <div class="search-block" id="search-block">
        <?php get_search_form(); ?>
    </div>
    
</header>