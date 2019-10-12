<?php 
/* Template Name: Diner */
get_header(); ?>

<?php $dinerpagina_img = get_field('dinerpagina_afbeelding');?>

<section>
	<div class="hero herodiner" style="background-image: url('<?php echo $dinerpagina_img; ?>');">
		<div class="hero-body">
			<div class="herodinerbody">
			<p class="bigtitlelight">Dinerkaart</p>
			<nav class="breadlinktext breadcrumb is-centered">
				<ul>
					<li><a href="#voorgerechten">Voorgerechten</a></li>
					<li><a href="#hoofdgerechten">Hoofdgerechten</a></li>
					<li><a href="#nagerechten">Nagerechten</a></li>
				</ul>
			</nav>
			</div>
		</div>
	</div>
</section>

    <!-- START DINERKAART -->
    <?php $dinerpagina_intro = get_field('dinerpagina_intro');
        $diner_hoofd_onder = get_field('dinerpagina_hoofdgerechten_ondertitel');
        $diner_na_onder = get_field('dinerpagina_nagerechten_ondertitel');?>
        
		<section class="dinerintro">
			<div class="container has-text-centered">
                <?php echo $dinerpagina_intro; ?>
            </div>
		</section>

		<section class="dinerkaart">
			<div id="voorgerechten"></div>
			<div class="container">

        <!-- START VOORGERECHTEN -->
			<?php $other_page = 21; ?>
			<?php $voorgerechten = get_field('voorgerechten', $other_page); ?>

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
                
                <?php $dinerpagina_afbeelding_menu_1 = get_field('dinerpagina_afbeelding_menu_1');?>
                <div class="dinerfoto"><img src="<?php echo $dinerpagina_afbeelding_menu_1;?>" alt="Eetcafé De Buurvrouw"></div>

			<!-- START HOOFDGERECHTEN -->
			<?php $hoofdgerechten = get_field('hoofdgerechten', $other_page); ?>

				<div id="hoofdgerechten"></div>
                <div class="smalltitle row is-12 title">Hoofdgerechten</div>
                
                <div class="dinerintro row is-12 has-text-centered"><?php echo $diner_hoofd_onder; ?><br/><br/></div>

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
                
                <?php $dinerpagina_afbeelding_menu_2 = get_field('dinerpagina_afbeelding_menu_2');?>
                <div class="dinerfoto"><img src="<?php echo $dinerpagina_afbeelding_menu_2;?>" alt="Eetcafé De Buurvrouw"></div>

			<!-- START NAGERECHTEN -->
			<?php $nagerechten = get_field('nagerechten', $other_page); ?>

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

                <section class="dinerintro">
					<div class="container has-text-centered">
                        <p class="is-italic"><?php echo $diner_na_onder; ?></p>
                    </div>
				</section>
			<!-- END DINERKAART -->
		
			<!-- START SCHOUWBURG -->
			<?php $stadsschouwburg_text = get_field('stadsschouwburg_text');
        		$stadsschouwburg_afbeelding = get_field('stadsschouwburg_afbeelding');?>
		
			  	<section class="schouwburg hero is-light is-small">
					<div class="hero-body container">
						<div class="columns is-centered is-multiline">
								<div class="column is-6">
                  <div class="column is-full smalltitleplain">Stadsschouwburg</div>
                  <p><?php echo $stadsschouwburg_text;?></p>
								</div>
								<div class="column is-6">
                  <figure class="image"><img src="<?php echo $stadsschouwburg_afbeelding;?>"></figure>
								</div>
						</div>
					</div>
				</section>

<?php get_footer(); ?>