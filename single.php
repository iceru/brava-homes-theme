<?php
/**
 * The Template for displaying all single posts.
 */

get_header();
?>

<div class="article-single">

	<div class="graphics">
		<img src="<?php bloginfo('template_directory');?>/images/articles/graphic-bottom.png" alt="Background">
	</div>
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				get_template_part( 'content', 'single' );
			endwhile;
		endif;

		wp_reset_postdata();

		$args_featured = array(
			'tax_query' => array( 
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => 'featured',
				),
			),	
			'posts_per_page' => 3
		);
		$featured = get_posts($args_featured);
	
	?>

	<div class="article-featured featured">
		<div class="row">
			<div class="col-12">
				<div class="title-page">
					<div class="title-text">
						Featured News
					</div>
					<div class="title-line"></div>
				</div>
			</div>
			<?php foreach ($featured as $post) : 
                    $post_id = $post->ID;
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post_id), 'thumbnail' ); 
                ?>
			<div class="col-12 col-lg-4 mb-3 mb-lg-0">
				<div class="item">
					<?php gt_set_post_view(); ?>
					<a href="<?php echo get_permalink($post_id) ?>">
						<div class="img">
							<img src="<?php echo $url ?>" alt="">
						</div>
					</a>
					<a href="<?php echo get_permalink($post_id) ?>">
						<div class="title">
							<?php echo get_the_title($post_id)?>
						</div>
					</a>
					<div class="text">
						<?php echo get_the_excerpt($post_id) ?>
					</div>
					<a href="<?php echo get_permalink($post_id) ?>">
						<div class="read-more">
							Read More
							<img src="<?php bloginfo('template_directory');?>/images/articles/read-more.png"
								alt="Read More">
						</div>
					</a>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata() ?>
		</div>
	</div>

</div>
<?php
get_footer();