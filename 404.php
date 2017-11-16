<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Halle
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'halle' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'halle' ); ?></p>
				</div>
			</section>

		</main>
	</div>

<?php
get_footer();
