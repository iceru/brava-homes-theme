<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'brava-homes' ); ?></a>

	<div id="wrapper">
		<header>
			<nav class="sidebar">
				<div class="bg">
					<img src="<?php bloginfo('template_directory');?>/images/template/sidebar-graphic.png"
						alt="Sidebar">
				</div>
				<div class="hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
					aria-controls="offcanvasExample">
					<img src="<?php bloginfo('template_directory');?>/images/template/hamburger.png" alt="Hamburger">
				</div>
			</nav>
		</header>
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
			aria-labelledby="offcanvasExampleLabel">\
			<div class="offcanvas-body">
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				<div class="header">
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"
						title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>"
							alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
					</a>
					<div class="language">
						<div class="item active">
							EN
						</div>
						<div class="divider"></div>
						<div class="item">
							ID
						</div>
					</div>
				</div>

				<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'menu-item',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>

			</div>
		</div>
		<main id="main"
			<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :   
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<?php
			endif;
		?>