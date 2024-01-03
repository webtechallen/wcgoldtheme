<?php get_header(); ?>

<div class="content">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="img-fluid mb-5" alt="<?php the_title(); ?>">
            <?php endif; ?>

            <h1><?php the_title(); ?></h1>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
