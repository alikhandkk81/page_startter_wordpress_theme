<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  
  <?php wp_head(); ?>

  	<!-- START NAV / HERO -->
		<div class="mainnav">

			<div class="navextra">
				<div class="navbar-start navextraL">
					<p><i class="fas fa-map-marker-alt"></i> Eetcafé De Buurvrouw - Oostersingel 152, Groningen <i class="far fa-clock"></i> ma v.a. 16:00 | di-vr v.a. 12:00 | za v.a. 17:00 | zo gesloten <i class="fas fa-phone"></i> 050 - 318 17 59</p>
				</div>
				<div class="navbar-end navextraR">
					<p class="icons">
						<a href=https://www.facebook.com/EetcafeDeBuurvrouw/ target="_blank"><i class="fab fa-facebook"></i></a>
						<a href=https://www.instagram.com/debuurvrouw050/ target="_blank"><i class="fab fa-instagram"></i></a>
						<a href=https://twitter.com/debuurvrouw050 target="_blank"><i class="fab fa-twitter"></i></a>
						<a href=https://www.tripadvisor.nl/Restaurant_Review-g188572-d745245-Reviews-Buurvrouw-Groningen.html target="_blank"><i class="fab fa-tripadvisor"></i></a>
					</p>
				</div>
			</div>

			<nav class="navbar navmain">
				<div class="container">								
					<div class="navbar-brand">
						<a href="<?php echo get_option("siteurl"); ?>" class="navbar-item"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Logo"></a>
						<span class="navbar-burger burger" data-target="navbarmenu">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</div>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_id' => 'navbarmenu',
							'container' => 'ul',
							'menu_class' => 'navbar-menu navbar-end',
						));?>
	
				</div>
			</nav>
          </div>
  
</head>

<body <?php body_class(); ?>>

		<!-- HAMBURGER JS -->
			<script>
				document.addEventListener('DOMContentLoaded', () => {

				// Get all "navbar-burger" elements
				const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

				// Check if there are any navbar burgers
				if ($navbarBurgers.length > 0) {

					// Add a click event on each of them
					$navbarBurgers.forEach( el => {
						el.addEventListener('click', () => {

							// Get the target from the "data-target" attribute
							const target = el.dataset.target;
							const $target = document.getElementById(target);

							// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
							el.classList.toggle('is-active');
							$target.classList.toggle('is-active');

						});
					});
				}
				});
			</script>