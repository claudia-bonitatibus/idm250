<?php 
/*
Template Name: General
*/
get_header(); ?>
		<header>
			<div class="headerText">
				<h1>
					<?php the_title();?>
				</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</p>
			</div>
		</header>
		<main>
			<?php if (have_posts()): ?>
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
        	<?php else: ?>
          	<h2>Sorry, No Post Found</h2>
        	<?php endif; ?>
				<div class="paddedItem">
					<a href="home.html" class="inactive">
						Inactive Link
					</a>
					<a href="home.html" class="active">
						Active Link
					</a>
				</div>
				<div>
					<button>
						button
					</button>
				</div>
				<div>
					<button class="smallBtn">
						button
					</button>
				</div>
				<div class="archiveGrid">
				<div class="portfolioItem">
					<div class="displayImage">
						<img src="<?php echo get_template_directory_uri();?>/assets/large-display/large-display-layers-and-opacities.png">
					</div>
					<div class="displayText">
						<h4> Lorem ipsum dolor </h4>
						<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
					</div>
				</div>
			</div>
<?get_footer(); ?>