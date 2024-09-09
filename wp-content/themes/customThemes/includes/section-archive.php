<?php if(have_posts()) : while(have_posts()): the_post(); ?>

    <div class="card mb-3">
        <div class="card-body">
            <div class="card-title">
                <h1>
                    <?php the_title()?>
                </h1>
            </div>
            <div class="card-content">
                <?php the_excerpt();?>
                <a href="<?php the_permalink()?>" class="btn btn-success"> Read more</a>
            </div>
        </div>
    </div>


<?php endwhile; else: endif;?>

