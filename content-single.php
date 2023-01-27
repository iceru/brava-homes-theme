<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid p-0">
		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) :
			endif;

			if ( has_post_thumbnail() ) :
				echo '<div class="article-img">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
			endif;
		?>
		</header>
		<div class="row entry-body">
			<div class="col-12 col-lg-8">
				<div class="top-section">
					<h1 class="article-title"><?php the_title(); ?></h1>
					<div class="article-meta">
						<?php brava_homes_article_posted_on(); ?>
					</div>
				</div>
				<div class="article-content">
					<?php
					the_content();
				?>
				</div>
			</div>
			<div class="col-12 col-lg-3 offset-lg-1">
				<div class="share">
					<div class="share-text">
						Share this article
					</div>
					<div class="share-icons">
						<?php echo apply_shortcodes( '[Sassy_Social_Share]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->