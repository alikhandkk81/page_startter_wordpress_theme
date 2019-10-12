<?php 
/* Template Name: Reserveren */
get_header(); ?>

<!-- START RESERVEREN -->
<?php $reserveren_text = get_field('reserveren_text');?>
<?php $reserveren_bg = get_field('reserveren_bg');?>

<section>
	<div class="hero herores" style="background-image: url('<?php echo $reserveren_bg; ?>');">
		<div class="hero-body container">
			<div class="resbody column is-12-mobile is-9-tablet is-9-desktop is-9-widescreen is-9-fullhd">
            <div class="bigtitleLH">Reserveren</div>
                <p><?php echo $reserveren_text; ?></p><br>
                <?php echo do_shortcode( "[ninja_form id=3]" ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>