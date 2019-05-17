<?php get_header(); ?>
<h1>This is from front-page.php</h1>

<div class="row mb-5">
    <?php if( have_posts() ): ?>
        <div class="col">
            <div class="card-deck">
            <?php while( have_posts() ): the_post() ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if( is_active_sidebar('sidebar-1') ): ?>
        <div class="col-3">
            <div class="card bg-light p-3">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        </div>
    <?php endif; ?>





</div>

<?php get_footer(); ?>