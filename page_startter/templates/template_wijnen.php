<?php 
/* Template Name: Wijnen */
get_header(); ?>

<?php $wijnen_img = get_field('wijnen_img');?>
<!-- START NAV / HERO -->
<?php $wijnen_info = get_field('wijnen_intro_text');?>
	<section class="hero is-fullheight herowijnen" style="background-image: url('<?php echo $wijnen_img; ?>');">			
		<div class="hero-body">
			<div class="herowijnenbody">
			<p class="bigtitle">Wijnkaart</p>
			<p><?php echo $wijnen_info; ?></p>
		    </div>
		</div>
	</section>
				
<!-- START WIJNKAART -->
<section class="dinerkaart">
        <div class="container">

    <!-- START RODE WIJNEN -->
    <?php $rood = get_field('rood');?>

		<div class="smalltitle row is-12 title">Rode Wijnen</div>

		<div class="columns is-mobile is-multiline">

		    <?php if( $rood['rode_wijn_1_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rood['rode_wijn_1_titel']; ?></strong></p>
                    <p><?php echo $rood['rode_wijn_1_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rood['rode_wijn_1_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rood['rode_wijn_1_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rood['rode_wijn_1_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $rood['rode_wijn_2_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rood['rode_wijn_2_titel']; ?></strong></p>
                    <p><?php echo $rood['rode_wijn_2_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rood['rode_wijn_2_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rood['rode_wijn_2_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rood['rode_wijn_2_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $rood['rode_wijn_3_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rood['rode_wijn_3_titel']; ?></strong></p>
                    <p><?php echo $rood['rode_wijn_3_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rood['rode_wijn_3_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rood['rode_wijn_3_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rood['rode_wijn_3_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $rood['rode_wijn_4_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rood['rode_wijn_4_titel']; ?></strong></p>
                    <p><?php echo $rood['rode_wijn_4_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rood['rode_wijn_4_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rood['rode_wijn_4_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rood['rode_wijn_4_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $rood['rode_wijn_5_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rood['rode_wijn_5_titel']; ?></strong></p>
                    <p><?php echo $rood['rode_wijn_5_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rood['rode_wijn_5_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rood['rode_wijn_5_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rood['rode_wijn_5_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $rood['rode_wijn_6_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rood['rode_wijn_6_titel']; ?></strong></p>
                    <p><?php echo $rood['rode_wijn_6_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rood['rode_wijn_6_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rood['rode_wijn_6_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rood['rode_wijn_6_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

		</div>

    <!-- START WITTE WIJNEN -->
    <?php $wit = get_field('wit');?>

        <div class="smalltitle row is-12 title">Witte Wijnen</div>

		<div class="columns is-mobile is-multiline">

            <?php if( $wit['witte_wijn_1_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $wit['witte_wijn_1_titel']; ?></strong></p>
                    <p><?php echo $wit['witte_wijn_1_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $wit['witte_wijn_1_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $wit['witte_wijn_1_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $wit['witte_wijn_1_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $wit['witte_wijn_2_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $wit['witte_wijn_2_titel']; ?></strong></p>
                    <p><?php echo $wit['witte_wijn_2_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $wit['witte_wijn_2_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $wit['witte_wijn_2_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $wit['witte_wijn_2_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $wit['witte_wijn_3_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $wit['witte_wijn_3_titel']; ?></strong></p>
                    <p><?php echo $wit['witte_wijn_3_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $wit['witte_wijn_3_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $wit['witte_wijn_3_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $wit['witte_wijn_3_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $wit['witte_wijn_4_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $wit['witte_wijn_4_titel']; ?></strong></p>
                    <p><?php echo $wit['witte_wijn_4_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $wit['witte_wijn_4_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $wit['witte_wijn_4_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $wit['witte_wijn_4_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $wit['witte_wijn_5_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $wit['witte_wijn_5_titel']; ?></strong></p>
                    <p><?php echo $wit['witte_wijn_5_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $wit['witte_wijn_5_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $wit['witte_wijn_5_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $wit['witte_wijn_5_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $wit['witte_wijn_6_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $wit['witte_wijn_6_titel']; ?></strong></p>
                    <p><?php echo $wit['witte_wijn_6_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $wit['witte_wijn_6_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $wit['witte_wijn_6_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $wit['witte_wijn_6_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

        </div>

    <!-- START ROSE WIJNEN -->
    <?php $rose = get_field('rose');?>

		<div class="smalltitle row is-12 title">Rosé Wijnen</div>

        <div class="columns is-mobile is-multiline">

            <?php if( $rose['rose_wijn_1_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rose['rose_wijn_1_titel']; ?></strong></p>
                    <p><?php echo $rose['rose_wijn_1_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rose['rose_wijn_1_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rose['rose_wijn_1_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rose['rose_wijn_1_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>

            <?php if( $rose['rose_wijn_2_titel'] ): ?>
		    	<div class="column is-9-mobile is-4-tablet is-5-desktop is-5-widescreen is-5-fullhd">
		    		<p class="is-uppercase"><strong><?php echo $rose['rose_wijn_2_titel']; ?></strong></p>
                    <p><?php echo $rose['rose_wijn_2_beschrijving']; ?></p>
                    <p class="is-italic"><?php echo $rose['rose_wijn_2_prijs_groot']; ?></p>
		    	</div>
		    	<div class="column is-3-mobile is-2-tablet is-1-desktop is-1-widescreen is-1-fullhd">
		    		<?php if( $rose['rose_wijn_2_prijs_glas'] ): ?>
		    			<p><span class="tag is-light is-medium"><?php echo $rose['rose_wijn_2_prijs_glas']; ?></span></p>
		    		<?php endif; ?>
		    	</div>
            <?php endif; ?>


		</div>
        </div>
    </section>
                
    <?php $wijnen_extra = get_field('wijnen_extra_info');?>
    <section class="wijnenextra">
		<div class="container has-text-centered">
			<p><?php echo $wijnen_extra; ?></p>
        </div>
	</section>
<!-- END WIJNKAART -->

<?php get_footer(); ?>