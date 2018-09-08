<?php 
/*
Template Name: Home
*/
get_header(); ?>
		<header>
			<div class="headerText">
				<h1>
					<?php the_title();?>
				</h1>
				<p>
					<?php echo get_field('summary');?>
				</p>
				<!-- <img src = assets/scroll-down-button.svg alt="scroll" class="scrollButton"> -->
			</div>
			
		</header>
		<main>
			<div class="aboutMe">
				<div class="aboutMeImg">
					<img src="<?php echo get_field('headshot');?>">
				</div>
				<div class="aboutMeText">
					<h2>
						<?php echo get_field('bio_heading');?>
					</h2>
					<p>
						<?php echo get_field('bio');?>
					</p>
				</div>
			</div>			
			<div class="resumeContainer">
				<?php if (have_posts()): ?>
	            <?php // TO SHOW THE PAGE CONTENTS?>
	            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
	              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
	            <?php endwhile; //resetting the page loop?>
	            <?php wp_reset_query(); //resetting the page query?>
	        	<?php else: ?>
	          	<h2>Sorry, No Post Found</h2>
	        	<?php endif; ?>
			</div>
		</main>
<?php get_footer(); ?>