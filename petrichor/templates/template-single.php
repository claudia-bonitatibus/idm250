<?php 
/*
Template Name: Single Post
*/
get_header(); ?>
		<header class="secondaryHeader">
			<div class="secondaryHeaderText">
				<h1> Portfolio Piece </h1>
			</div>
		</header>
		<main>
			<div class="portfolioPieceCard">
				<div class="largeImg">
					<img src="<?php echo get_field('portfolio_piece');?>">
				</div>
				<div class="textContent">
					<h3>
						<?php the_title();?>
					</h3>
					<h6>
						<?php echo get_the_date();?>
					</h6>
					<p>
						<?php if (have_posts()): ?>
			            <?php // TO SHOW THE PAGE CONTENTS?>
			            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			            <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
			            <?php endwhile; //resetting the page loop?>
			            <?php wp_reset_query(); //resetting the page query?>
			        	<?php else: ?>
			          		<h2>Sorry, No Post Found</h2>
			        	<?php endif; ?>
					</p>
				</div>
			</main>
<?php get_footer(); ?>