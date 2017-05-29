<?php
/**
 * The template for displaying an overview of posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Harper
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="intro-posts">
		<?php
		query_posts('showposts=4');

		if ( have_posts() ) :

			$first = true;

			while ( have_posts() ) : the_post();

				if ( has_post_thumbnail() ) {

					if ( ! false == $first ) {

						get_template_part( 'template-parts/content-featured' );

						$first = false;

					} else {

						get_template_part( 'template-parts/content-home' );

					}

				}

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		wp_reset_query(); ?>
		</div>

		<div class="latest-feed archive">
			<h3>Latest</h3>

			<?php
			$args = array(
				'offset' => 4,
			);

			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/content', 'archive' );
				}
			
			wp_reset_postdata();
			
			} ?>
		</div>

		</main>
	</div>

<?php
get_footer();
