<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div class="d-flex">
        <?php while (have_posts()) : the_post(); ?>
            <div class="flex col">
                <div class="col">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>


        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>