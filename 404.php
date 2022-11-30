<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<div class="container-fluid container-404">
	<div id="post-0" class="content error404 not-found">
		<h1 class="entry-title"><?php esc_html_e( 'Not found', 'brava-homes' ); ?></h1>
		<div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'brava-homes' ); ?></p>
			<div class="back">
				<a href="/">Back To Home</a>
			</div>
		</div><!-- /.entry-content -->
	</div><!-- /#post-0 -->
</div>
<?php
get_footer();