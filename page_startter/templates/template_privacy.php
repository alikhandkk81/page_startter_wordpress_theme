<?php 
/* Template Name: Privacy */
get_header(); ?>

<!-- START PRIVACY -->
<?php $privacy = get_field('privacyverklaring');?>

<section class="voorwaardenprivacy">
    <div class="container">
        <p><?php echo $privacy; ?></p><br>
    </div>
</section>

<?php get_footer(); ?>