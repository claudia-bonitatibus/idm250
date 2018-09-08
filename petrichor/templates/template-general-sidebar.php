<?php
/*
Template Name: General with Sidebar
*/

get_header(); ?>
		<header>
			<div class="headerText">
				<h1>
					<?php the_title();?>
				</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. 
				</p>
			</div>
		</header>
		<div class="bodyWithSidebar">
			<aside>
				<?php get_sidebar();?>
			</aside>
			<main class="mainWithSidebar">
			<?php if (have_posts()): ?>
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
        	<?php else: ?>
          	<h2>Sorry, No Post Found</h2>
        	<?php endif; ?>
        </main>
        </div>
<?php get_footer(); ?>