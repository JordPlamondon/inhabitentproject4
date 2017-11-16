<?php
/**
 * Front page (home page) template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="hero">
				<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/logos/inhabitent-logo-full.svg'; ?>" alt="Inhabitent Logo" />
			</section>

		<section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
							 ) );
							 
							 d($terms);

               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>
         </section>


		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
      	<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>	

		<ul>
			<?php
    	$args = array( 'posts_per_page' => '3');
    	$product_posts = get_posts( $args );?>
    	<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			<li>
			<div class="thumbnail">	
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<div class="journal-text">
				<div class="date-comments">
					<?php the_date(); ?> / <?php comments_number(); ?> 
				</div>				
			<h2><?php the_title(); ?></h2>
			<a href="<?php echo get_the_permalink();?>">Read More</a>
			</div>
			</li>	
    	<?php endforeach; wp_reset_postdata(); ?>
		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>