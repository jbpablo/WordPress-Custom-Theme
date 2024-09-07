<?php 
/*
    Template Name: Contact

*/

?>

<?php get_header(); ?>

<section class="page-wrap">
    
<div class="container">
        <h1><?php the_title()?></h1>

        <div class="row">
            <div class="col-lg-6">
                Contact form
            </div>
            <div class="col-lg-6">
                Page
            </div>
        </div>
        <?php get_template_part('includes/section', 'content') ?>

    
</div>
</section>



<?php get_footer(); ?>