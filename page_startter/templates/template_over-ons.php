<?php 
/* Template Name: Over ons */
get_header(); ?>

<!-- START OVER ONS -->
<?php $over = get_field('over_ons');?>
    <section class="herooverons hero is-light is-small">
		<div class="hero-body container">
			<div class="columns is-multiline">
                <div class="column is-full bigtitleLH">Eetcafé De Buurvrouw</div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen is-6-fullhd">
                    <figure class="image"><img src="<?php echo $over['over_ons_img']; ?>"></figure>
                </div>
				<div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen is-6-fullhd">
                    <p><?php echo $over['over_ons_text']; ?></p><br>
                    <p class="overonscontact"><?php echo $over['over_ons_outro']; ?></p>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>