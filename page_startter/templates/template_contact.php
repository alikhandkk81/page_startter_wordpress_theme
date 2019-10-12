<?php 
/* Template Name: Contact */
get_header(); ?>

<!-- START RESERVEREN -->
<?php $contact_text = get_field('contact_text');?>
<?php $contact_bg = get_field('contact_bg');?>

<section>
	<div class="hero herores" style="background-image: url('<?php echo $contact_bg; ?>');">
		<div class="hero-body container">
				<div class="resbody column is-12-mobile is-9-tablet is-9-desktop is-9-widescreen is-9-fullhd">
                <div class="bigtitleLH">Contact</div>
                    <p><?php echo $contact_text; ?></p><br>
                    <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
				</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>