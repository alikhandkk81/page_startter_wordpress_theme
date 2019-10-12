<?php 
/* Template Name: Borrel */
get_header(); ?>

<?php $borrel_text = get_field('borrel_text'); 
    $borrel_afbeelding = get_field('borrel_afbeelding'); ?>

			<!-- START BORRELKAART -->
            <section class="heroborrel hero is-light borreltitle" style="background-image: url('<?php echo $borrel_afbeelding; ?>');">
				<p class="bigtitlelightshadow">Borrelen bij De Buurvrouw</p>
			</section>

			<section class="dinerintro">
				<div class="container has-text-centered">
                    <?php echo $borrel_text; ?>
                </div>
			</section>

				<section class="dinerkaart">
					<div class="container">

                    <?php $borrelkaart = get_field('borrelkaart');?>

						<div class="smalltitle row is-12 title">Borrelkaart</div>

						<div class="columns is-mobile is-multiline">
                            <?php if( $borrelkaart['borrel_1_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_1_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_1_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_1_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_1_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                
                            <?php if( $borrelkaart['borrel_2_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_2_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_2_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_2_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_2_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_3_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_3_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_3_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_3_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_3_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_4_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_4_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_4_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_4_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_4_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_5_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_5_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_5_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_5_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_5_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_6_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_6_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_6_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_6_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_6_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_7_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_7_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_7_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_7_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_7_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_8_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_8_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_8_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_8_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_8_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_9_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_9_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_9_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_9_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_9_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_10_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_10_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_10_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_10_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_10_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_11_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_11_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_11_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_11_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_11_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_12_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_12_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_12_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_12_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_12_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_13_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_13_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_13_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_13_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_13_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( $borrelkaart['borrel_14_titel'] ): ?>
                                <div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
                                    <p class="is-uppercase"><strong><?php echo $borrelkaart['borrel_14_titel']; ?></strong></p>
                                    <p><?php echo $borrelkaart['borrel_14_beschrijving']; ?></p>
                                </div>
                                <div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
                                    <?php if( $borrelkaart['borrel_14_prijs'] ): ?>
                                        <p><span class="tag is-light is-medium"><?php echo $borrelkaart['borrel_14_prijs']; ?></span></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
				</section>
            <!-- END BORRELKAART -->

            <!-- START FOTO'S -->
                <?php $borrelfotos = get_field('borrel_fotos');?>
                    
                <section class="borrelfotos">
                    <div class="columns is-gapless is-multiline is-mobile">

                        <div class="column is-12-mobile is-6-tablet is-4-desktop is-3-widescreen is-3-fullhd">
                            <a href="<?php echo $borrelfotos['borrel_foto1']; ?>" rel="lightbox"><img src="<?php echo $borrelfotos['borrel_foto1']; ?>"></a>
                        </div>
                        <div class="column is-12-mobile is-6-tablet is-4-desktop is-3-widescreen is-3-fullhd">
                            <a href="<?php echo $borrelfotos['borrel_foto2']; ?>" rel="lightbox"><img src="<?php echo $borrelfotos['borrel_foto2']; ?>"></a>
                        </div>
                        <div class="column is-12-mobile is-6-tablet is-4-desktop is-3-widescreen is-3-fullhd">
                            <a href="<?php echo $borrelfotos['borrel_foto3']; ?>" rel="lightbox"><img src="<?php echo $borrelfotos['borrel_foto3']; ?>"></a>
                        </div>
                        <div class="column is-12-mobile is-6-tablet is-4-desktop is-3-widescreen is-3-fullhd">
                            <a href="<?php echo $borrelfotos['borrel_foto4']; ?>" rel="lightbox"><img src="<?php echo $borrelfotos['borrel_foto4']; ?>"></a>
                        </div>
                    </div>
                </section>

<?php get_footer(); ?>