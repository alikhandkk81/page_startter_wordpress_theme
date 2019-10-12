<?php get_header(); ?>

<!-- START HERO -->
<section class="heroimg">
<?php $heroimg = get_field('hero-img');?>
	<img src="<?php echo $heroimg?>" alt="Team De Buurvrouw">
</section>

<!-- START ABOUT -->
<?php $about = get_field('about');?>

<section class="about">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-full-mobile is-full-tablet is-half-desktop is-half-widescreen is-half-fullhd">
				<p class="smalltitleplain"><?php echo $about['about_title'];?></p>
				<p class="subtitle is-uppercase"><?php echo $about['about_subtitle'];?></p>
				<p class="content"><?php echo $about['about_text'];?></p>
				<a href="/over-ons/" class="button is-dark"><?php echo $about['about_button'];?></a>
			</div>
			<div class="column">
				<img src="<?php echo $about['about_image'];?>" alt="Team De Buurvrouw">
			</div>
		</div>
	</div>
</section>

<!-- START DINERKAART -->
	<section class="hero is-small is-dark is-bold">
		<div class="hero-body">
			<p class="bigtitle">Dinerkaart</p>
			<nav class="breadlinktext breadcrumb is-centered">
				<ul>
					<li><a href="#voorgerechten">Voorgerechten</a></li>
					<li><a href="#hoofdgerechten">Hoofdgerechten</a></li>
					<li><a href="#nagerechten">Nagerechten</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<section class="dinerintro">
	<?php $diner_intro_1 = get_field('diner_intro_1');
		$diner_intro_2 = get_field('diner_intro_2');?>
		<div class="container has-text-centered">
			<?php echo $diner_intro_1; ?>
			<br><br>
			<p class="is-italic"><?php echo $diner_intro_2; ?></p>
		</div>
	</section>

	<section class="dinerkaart">
		<div id="voorgerechten"></div>
		<div class="container">

	<!-- START VOORGERECHTEN -->
	<?php $voorgerechten = get_field('voorgerechten');?>

		<div class="smalltitle row is-12 title">Voorgerechten</div>

		<div class="columns is-mobile is-multiline">

			<?php if( $voorgerechten['voorgerecht_1_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_1_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_1_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_1_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_1_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_2_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_2_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_2_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_2_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_2_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_3_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_3_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_3_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_3_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_3_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_4_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_4_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_4_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_4_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_4_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_5_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_5_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_5_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_5_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_5_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_6_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_6_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_6_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_6_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_6_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_7_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_7_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_7_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_7_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_7_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $voorgerechten['voorgerecht_8_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $voorgerechten['voorgerecht_8_titel']; ?></strong></p>
					<p><?php echo $voorgerechten['voorgerecht_8_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $voorgerechten['voorgerecht_8_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $voorgerechten['voorgerecht_8_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

	<!-- START HOOFDGERECHTEN -->
	<?php $hoofdgerechten = get_field('hoofdgerechten');?>

		<div id="hoofdgerechten"></div>
		<div class="smalltitle row is-12 title">Hoofdgerechten</div>

		<div class="columns is-mobile is-multiline">

			<?php if( $hoofdgerechten['hoofdgerecht_1_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_1_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_1_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_1_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_1_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_2_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_2_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_2_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_2_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_2_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_3_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_3_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_3_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_3_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_3_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_4_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_4_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_4_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_4_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_4_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_5_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_5_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_5_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_5_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_5_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_6_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_6_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_6_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_6_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_6_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_7_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_7_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_7_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_7_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_7_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $hoofdgerechten['hoofdgerecht_8_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $hoofdgerechten['hoofdgerecht_8_titel']; ?></strong></p>
					<p><?php echo $hoofdgerechten['hoofdgerecht_8_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $hoofdgerechten['hoofdgerecht_8_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $hoofdgerechten['hoofdgerecht_8_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

	<!-- START NAGERECHTEN -->
	<?php $nagerechten = get_field('nagerechten');?>

		<div id="nagerechten"></div>
		<div class="smalltitle row is-12 title">Nagerechten</div>

		<div class="columns is-mobile is-multiline">

			<?php if( $nagerechten['nagerecht_1_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_1_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_1_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_1_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_1_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_2_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_2_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_2_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_2_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_2_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_3_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_3_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_3_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_3_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_3_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_4_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_4_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_4_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_4_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_4_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_5_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_5_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_5_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_5_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_5_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_6_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_6_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_6_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_6_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_6_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_7_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_7_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_7_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_7_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_7_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( $nagerechten['nagerecht_8_titel'] ): ?>
				<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
					<p class="is-uppercase"><strong>			
					<?php echo $nagerechten['nagerecht_8_titel']; ?></strong></p>
					<p><?php echo $nagerechten['nagerecht_8_beschrijving']; ?></p>
				</div>
				<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
					<?php if( $nagerechten['nagerecht_8_prijs'] ): ?>
						<p><span class="tag is-light is-medium">
						<?php echo $nagerechten['nagerecht_8_prijs']; ?></span></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			</div>
		</section>
				
	<!-- START DINER FOOTER -->
		<div class="dinerfooter hero">
			<nav class="breadlinkdark breadcrumb is-centered is-small-mobile is-small-tablet is-large-desktop is-large-widescreen is-large-fullhd">
				<ul>
					<li>
						<a href="/wijnen/">
							<span class="icon is-small">
								<i class="fas fa-wine-glass-alt"></i>
							</span>
							<span>Wijnkaart</span>
						</a>
					</li>
					<li>
						<a href="/lunch/">
							<span class="icon is-small">
								<i class="fas fa-bread-slice"></i>
							</span>
							<span>Lunchkaart</span>
						</a>
					</li>
					<li>
						<a href="/borrel/">
							<span class="icon is-small">
								<i class="fas fa-beer"></i>
							</span>
							<span>Borrelkaart</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
<!-- END DINERKAART -->

<!-- START RESERVEREN -->
	<section class="reserverenheader hero is-small is-dark is-bold">
		<div class="hero-body">
			<p class="bigtitle">Reserveren</p>
		</div>
	</section>

	<?php $resbg = get_field('reserveren_bg');?>

	<?php $other_page = 69; ?>
	<?php $restext = get_field('reserveren_text', $other_page); ?>

	<section class="reserverenform" style="background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('<?php echo $resbg; ?>'); background-attachment: fixed; object-fit: cover;">
		<div class="container">
			<p class="reserverentext"><?php echo $restext; ?></p>
			<?php echo do_shortcode( "[ninja_form id=3]" ); ?>
		</div>
	</section>

<!-- START RECENSIES -->
<?php $recensies = get_field('recensies');?>
	<section class="hero is-dark is-small">
		<div class="hero-body">
			<div class="columns is-centered is-multiline">
				<div class="column is-full bigtitle">Recensies</div>
				<div class="column is-7"><?php echo $recensies['recensie_1_text']; ?>
					<br><br><p class="minititle"><?php echo $recensies['recensie_1_naam']; ?></p>
				</div>
				<div class="column is-5"><?php echo $recensies['recensie_2_text']; ?>
					<br><br><p class="minititle"><?php echo $recensies['recensie_2_naam']; ?></p>
				</div>
			</div>
		</div>
	</section>

<!-- START OPENINGSTIJDEN -->
<?php $open = get_field('openingstijden');?>

	<section class="hero is-small is-light is-bold openingstijden">
		<div class="hero-body">
			<p class="bigtitle">Openingstijden:</p>
			<table class="table container">
				<?php if( $open['veld_1_dag'] ): ?>
					<tr><td><?php echo $open['veld_1_dag']; ?></td><td><?php echo $open['veld_1_tijd']; ?></td></tr>
				<?php endif; ?>
				<?php if( $open['veld_2_dag'] ): ?>
					<tr><td><?php echo $open['veld_2_dag']; ?></td><td><?php echo $open['veld_2_tijd']; ?></td></tr>
				<?php endif; ?>	
				<?php if( $open['veld_3_dag'] ): ?>
					<tr><td><?php echo $open['veld_3_dag']; ?></td><td><?php echo $open['veld_3_tijd']; ?></td></tr>
				<?php endif; ?>
				<?php if( $open['veld_4_dag'] ): ?>
					<tr><td><?php echo $open['veld_4_dag']; ?></td><td><?php echo $open['veld_4_tijd']; ?></td></tr>
				<?php endif; ?>
			</table>
			<p><?php echo $open['open_text']; ?></p>
		</div>
	</section>

<?php get_footer(); ?>