<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
		integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
		integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
		integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
		integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
		integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		<div class="offcanvas offcanvas-start offcanvas-sidebar" tabindex="-1" id="offcanvasExample"
			aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-body">
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				<div class="bg-bottom">
					<img src="<?php bloginfo('template_directory');?>/images/graphics/sidebar.png" alt="Background">
				</div>
				<div class="top-section">
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
						<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu' => 'language',
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'language',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
					</div>

					<!-- <div class="menu-container">
						<?php
						// Loading WordPress Custom Menu (theme_location).
						// wp_nav_menu(
						// 	array(
						// 		'theme_location' => 'main-menu',
						// 		'container'      => '',
						// 		'menu_class'     => 'menu-item',
						// 		'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						// 		'walker'         => new WP_Bootstrap_Navwalker(),
						// 	)
						// );
					?>
					</div> -->

					<div class="menu-container">
						<ul>
							<li>
								<a href="/about">About</a>
							</li>
							<div class="btn-group">
								<div class="menu-link"><a href="/unit-types">Unit Types</a> </div>
								<div class="menu-link ms-2 dropdown-toggle dropdown-toggle-split"
									data-bs-toggle="dropdown" aria-expanded="false">
									<span class="visually-hidden">Toggle Dropdown</span>
								</div>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="/unit/diponegoro">Brava Diponegoro</a></li>
									<li><a class="dropdown-item" href="/unit/himalaya">Brava Himalaya</a></li>
								</ul>
							</div>
							<li>
								<a href="/location">Location</a>
							</li>
							<li>
								<a href="#">360 Tour</a>
							</li>
							<li>
								<a href="/articles">Articles</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="bottom-section">
					<div class="title">
						Socials
					</div>
					<div class="socials">
						<div class="socials">
							<div class="item">
								<a target="_blank" href="https://www.instagram.com/brava.homes/">
									<img src="<?php bloginfo('template_directory');?>/images/instagram.png"
										alt="Instagram">
								</a>
							</div>
							<div class="item">
								<a target="_blank" href="#">
									<img src="<?php bloginfo('template_directory');?>/images/twitter.png" alt="Twitter">
								</a>
							</div>
							<div class="item">
								<a target="_blank" href="#">
									<img src="<?php bloginfo('template_directory');?>/images/facebook.png"
										alt="Facebook">
								</a>
							</div>
						</div>
					</div>
					<div class="copyright">
						<?php printf( esc_html__( 'Lippo Home &copy; %1$s. All rights reserved.'), date_i18n( 'Y' ) ); ?>
					</div>
				</div>
			</div>
		</div>
		<main id="main">