<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		content = "width= device-width,
		initial-scale= 1.0"
	>
	<title><?php the_title();?></title>
	<!-- Open Wordpress Header Code -->
	<?php wp_head(); ?>
	<!-- Close Wordpress Header Code -->
	</head>
	<body <?php body_class();?>>
		<nav>
			<div class="navContainer">
			<a href="<?php echo site_url('/'); ?>">
				<img src = <?php echo get_template_directory_uri();?>/assets/personal-logo.svg alt="home" class="logo">
			</a>
	        <?php
		       	wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
                'menu_class'      => 'nav navigation',
                
            ]);?>

			<form role="search" action="<?php echo site_url('/'); ?>" method="get" class= "searchBar">
			<input type="search" id="s" name="s" placeholder="Search keywords"/>
					<button class="searchIcon"><img src = <?php echo get_template_directory_uri();?>/assets/search-button.svg alt="search" id="searchsubmit" class="searchButton"></button>
			</form>
		</div>
		</nav>