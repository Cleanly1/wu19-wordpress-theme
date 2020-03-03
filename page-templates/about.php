<?php

/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div class="d-flex flex-column align-items-start">
        <?php while (have_posts()) : the_post(); ?>
            <div class="d-flex flex-row">
                <div class="d-flex flex-column">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>


        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php $students = get_posts(['post_type' => 'student']) ?>

<ul>
    <?php foreach ($students as $post) : setup_postdata($post) ?>

        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            <ul class="col">
                <p class="mb-0">Awsome at:</p>
                <?php $skills = get_the_terms($post, 'skill'); ?>
                <?php foreach ($skills as $skill) : ?>
                    <li class="ml-5 row"><?php echo $skill->name ?></li>
                <?php endforeach; ?>

            </ul>
        </li>
    <?php endforeach; ?>
</ul>



<?php get_footer(); ?>