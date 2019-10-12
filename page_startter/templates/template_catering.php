<?php 
/* Template Name: Catering */
get_header(); ?>

<!-- START CATERING -->
<?php $catering = get_field('catering');?>

    <section class="herocatering hero is-light is-small">
		<div class="hero-body container">
			<div class="columns is-centered is-multiline">
					<div class="column is-12-mobile is-12-tablet is-8-desktop is-8-widescreen is-8-fullhd">
                        <div class="column is-full bigtitleLH"><?php echo $catering['catering_titel']; ?></div>
                        <p><?php echo $catering['catering_intro']; ?></p>
                        <?php if( $catering['catering_1_titel'] ): ?>
                            <p class="smalltitle"><?php echo $catering['catering_1_titel']; ?></p>
                        <?php endif; ?>
                            <p><?php echo $catering['catering_1_text']; ?></p>
                        <?php if( $catering['catering_2_titel'] ): ?>
                            <p class="smalltitle"><?php echo $catering['catering_2_titel']; ?></p>
                        <?php endif; ?>
                        <p><?php echo $catering['catering_2_text']; ?></p>
                        <?php if( $catering['catering_2_titel'] ): ?>
                            <p class="smalltitle"><?php echo $catering['catering_3_titel']; ?></p>
                        <?php endif; ?>
                        <p><?php echo $catering['catering_3_text']; ?></p>
                        <?php if( $catering['catering_2_titel'] ): ?>
                            <p class="smalltitle"><?php echo $catering['catering_4_titel']; ?></p>
                        <?php endif; ?>
                            <p><?php echo $catering['catering_4_text']; ?></p><br>
                        <?php if( $catering['catering_outro'] ): ?>
                            <p class="cateringcontact"><?php echo $catering['catering_outro']; ?></p>
                        <?php endif; ?>
					</div>
					<div class="cateringfoto column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen is-4-fullhd">
                        <figure class="image"><img src="<?php echo $catering['catering_img']; ?>"></figure>
					</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
