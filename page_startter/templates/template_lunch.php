<?php 
/* Template Name: Lunch */
get_header(); ?>

<section class="hero herolunch">
<?php $lunchimg = get_field('lunch-img');
      $size = 'full';
    if( $lunchimg ) {
    echo wp_get_attachment_image( $lunchimg, $size ); } ?>
</section>

<!-- START LUNCHKAART -->
	<section class="hero is-small is-dark is-bold">
		<div class="hero-body">
			<p class="bigtitle">Lunchkaart</p>
			<nav class="breadlinktext breadcrumb is-centered">
				<ul>
					<li><a href="#broodjes">Broodjes</a></li>
					<li><a href="#warmkoud">Warme en koude gerechten</a></li>
					<li><a href="#zoetigheid">Huisgemaakte zoetigheid</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<section class="dinerintro">
	<?php $lunch_intro_1 = get_field('lunch_intro_1');
		$lunch_intro_2 = get_field('lunch_intro_2');?>
		<div class="container has-text-centered">
			<?php echo $lunch_intro_1; ?>	
			<br><br>
            <p class="is-italic"><?php echo $lunch_intro_2; ?></p>
        </div>
	</section>

	<section class="dinerkaart">
		<div id="broodjes"></div>
		<div class="container">

	<!-- START BROODJES -->
		<?php $broodjes = get_field('broodjes');?>

			<div class="smalltitle row is-12 title">Broodjes</div>

			<div class="columns is-mobile is-multiline">

				<?php if( $broodjes['broodje_1_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_1_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_1_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_1_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_1_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_2_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_2_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_2_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_2_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_2_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_3_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_3_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_3_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_3_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_3_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_4_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_4_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_4_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_4_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_4_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_5_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_5_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_5_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_5_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_5_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_6_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_6_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_6_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_6_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_6_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_7_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_7_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_7_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_7_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_7_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $broodjes['broodje_8_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $broodjes['broodje_8_titel']; ?></strong></p>
						<p><?php echo $broodjes['broodje_8_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $broodjes['broodje_8_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $broodjes['broodje_8_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

		<!-- START WARME/KOUDE GERECHTEN -->
			<?php $warmkoud = get_field('warmkoud');?>
            <div id="warmkoud"></div>
			<div class="smalltitle row is-12 title">Warme en koude gerechten</div>

				<div class="columns is-mobile is-multiline">

				<?php if( $warmkoud['warmkoud_1_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_1_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_1_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_1_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_1_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_2_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_2_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_2_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_2_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_2_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_3_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_3_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_3_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_3_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_3_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_4_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_4_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_4_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_4_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_4_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_5_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_5_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_5_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_5_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_5_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_6_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_6_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_6_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_6_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_6_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_7_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_7_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_7_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_7_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_7_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_8_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_8_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_8_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_8_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_8_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_9_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_9_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_9_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_9_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_9_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if( $warmkoud['warmkoud_10_titel'] ): ?>
					<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
						<p class="is-uppercase"><strong><?php echo $warmkoud['warmkoud_10_titel']; ?></strong></p>
						<p><?php echo $warmkoud['warmkoud_10_beschrijving']; ?></p>
					</div>
					<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
						<?php if( $warmkoud['warmkoud_10_prijs'] ): ?>
							<p><span class="tag is-light is-medium"><?php echo $warmkoud['warmkoud_10_prijs']; ?></span></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
            </div>
                        
			<!-- START ZOETIGHEID -->
				<?php $zoetigheid = get_field('zoetigheid');?>
                <div id="zoetigheid"></div>
                <div class="smalltitle row is-12 title">Huisgemaakte zoetigheid</div>
                <div class="columns is-mobile is-multiline">

					<?php if( $zoetigheid['zoetigheid_1_titel'] ): ?>
						<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
							<p class="is-uppercase"><strong><?php echo $zoetigheid['zoetigheid_1_titel']; ?></strong></p>
							<p><?php echo $zoetigheid['zoetigheid_1_beschrijving']; ?></p>
						</div>
						<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
							<?php if( $zoetigheid['zoetigheid_1_prijs'] ): ?>
								<p><span class="tag is-light is-medium"><?php echo $zoetigheid['zoetigheid_1_prijs']; ?></span></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if( $zoetigheid['zoetigheid_2_titel'] ): ?>
						<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
							<p class="is-uppercase"><strong><?php echo $zoetigheid['zoetigheid_2_titel']; ?></strong></p>
							<p><?php echo $zoetigheid['zoetigheid_2_beschrijving']; ?></p>
						</div>
						<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
							<?php if( $zoetigheid['zoetigheid_2_prijs'] ): ?>
								<p><span class="tag is-light is-medium">€<?php echo $zoetigheid['zoetigheid_2_prijs']; ?></span></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
        <!-- END LUNCHKAART -->
            
		<!-- START HIGH TEA / AFHAAL -->
			<?php $high_tea = get_field('high_tea');?>
			<?php $afhaal = get_field('afhaal');?>

			<section class="lunchextra hero is-light is-small">
				<div class="hero-body container">
					<div class="columns is-centered is-multiline">
							<div class="column is-6">
                                <div class="column is-full smalltitleplain"><?php echo $high_tea['high_tea_titel']; ?></div>
                                <p><?php echo $high_tea['high_tea_text']; ?></p>
                                <br><br>
                                <figure class="image"><img src="<?php echo $high_tea['high_tea_afbeelding']; ?> "></figure>
							</div>
							<div class="column is-6">
                                <div class="column is-full smalltitleplain"><?php echo $afhaal['afhaal_titel']; ?></div>
                                <p><?php echo $afhaal['afhaal_text']; ?></p>
                                <br><br>
                                <figure class="image"><img src="<?php echo $afhaal['afhaal_afbeelding']; ?> "></figure>
							</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>