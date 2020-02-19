<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php foreach (get_posts(['sort_order' => 'asc']) as $post) {
    setup_postdata($post);  ?>
    <a href="<?php the_permalink(get_option('page_for_posts')); ?>" class="d-flex flex-column"><?php the_title() ?></a>
    <?php the_post_thumbnail('thumbnail'); ?>
    <?php the_excerpt(); ?>
<?php } ?>

<?php get_footer(); ?>