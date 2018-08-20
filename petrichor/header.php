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
	<body>
		<nav>
			<a href="index.php">
				<img src = <?php echo get_template_directory_uri();?>/assets/personal-logo.svg alt="home" class="logo">
			</a>
			<img src = <?php echo get_template_directory_uri();?>/assets/open-menu.svg alt="menu" class="openMenu">
	        <ul class="navigation hideNav">
	        	<li class="homeLink">
		        	<a href="<?php echo get_template_directory_uri();?>/index.php">Home</a>
		        </li>
		       	<li>
		        	<a href="<?php echo get_template_directory_uri();?>/archive.php">Web Design</a>
		        </li>
		        <li>
		        	<a href="<?php echo get_template_directory_uri();?>/archive.php">College Portfolio</a>
		        </li>
		        <li>
		        	<a href="<?php echo get_template_directory_uri();?>/archive.php">Prior Works</a>
		        </li>
	        </ul>
			<div class="search">
			<input type="text" class="inputChannel" placeholder="Search...">
				<a href="<?php echo get_template_directory_uri();?>/search.php">
					<img src = <?php echo get_template_directory_uri();?>/assets/search-button.svg alt="search" class="searchButton">
				</a>
			</div>
		</nav>