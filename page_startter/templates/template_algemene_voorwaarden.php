<?php 
/* Template Name: Algemene voorwaarden */
get_header(); ?>

<!-- START VOORWAARDEN -->
<?php $voorwaarden = get_field('voorwaarden');?>

<section class="voorwaardenprivacy">
    <div class="container">
        <p><?php echo $voorwaarden; ?></p><br>
    </div>

</section>

<?php get_footer(); ?>