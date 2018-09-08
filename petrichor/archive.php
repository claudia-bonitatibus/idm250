<?php 
/**
 * The template for displaying archive pages
 *
 */
// FILTER BY CATEGORY
// $category_to_filter = college-portfolio;
// $posts_in = array();
// while ( have_posts() ) : the_post();
// $categories = get_the_category();
//     if( in_array($category_to_filter, $categories) && count($categories) > 1 ) {
//         $posts_in[] = $post->ID;
//     }
// endwhile;


get_header(); ?>
        <header class="secondaryHeader">
            <div class="secondaryHeaderText">
                <h1> Portfolio </h1>
            </div>
        </header>
        <main>

            <div class="archiveGrid">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();?>

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