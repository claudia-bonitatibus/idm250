<?php 
$searched_string = $_GET['s'];
get_header(); ?>


<div class="searchInfo">
	<h6>
		Showing results for “<?php echo $searched_string;?>”
	</h6>
</div>
<main>
	<div class="archiveGrid">
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

		<div class="portfolioItem">
			<div class="displayImage">
				<!-- DYNAMIC THUMBNAIL -->
				<?php
				if (has_post_thumbnail()): ?>
            	<?php the_post_thumbnail();?>
          		<?php else: ?>
            	<img src="https://placehold.it/150x150" alt="">
          		<?php endif; ?>
			</div>
			<div class="displayText">
				<!-- DYNAMIC LINK -->
				<a href="<?php the_permalink(); ?>"><h4><?php the_title()?></h4></a>
				<!-- DYNAMIC EXCERPT -->
				<h6><?php echo get_field('caption'); ?></h6>
			</div>
		</div>
	<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  	<?php else : ?>
        <p>
          <?php echo 'Sorry, no posts matched your criteria.'; ?>
        </p>
	<?php endif; ?>
	</div>
 </main>
<?php get_footer(); ?>