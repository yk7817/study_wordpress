<!-- header -->
<?php get_header(); ?>


<!-- single page -->
<div class="single-page__container">
    <main class="single-page__inner">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <h2 class="single-page__title">
                    <?php the_title(); ?>
                </h2>
                <div class="single-page__content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
</div>


<!-- footer -->
<?php get_footer(); ?>