<!-- header -->
<?php get_header(); ?>

<!-- top page -->
<div class="main-visual">
    <main class="main-visual__inner">
        <ul class="main-visual__item-list">
            <?php if(have_posts()): ?>
                <?php
                    $postsLength = array('posts_per_page' => 8);
                    $posts = get_posts($postsLength);
                ?>
                <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                    <li class="main-visual__item" >
                        <a class="main-visual__item-link" href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                        <span class="main-visual__item-name" ><?php the_title() ?></span>
                        <span class="main-visual__item-price" >&yen;<?php $price = get_post_meta(get_the_ID(), 'price', true);
                            echo number_format((int)$price);
                        ?> +tax</span>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </main>
    <div class="view">
        <a class="view__link" href="<?php echo esc_url(home_url("/category/product/")) ?>">View More</a>
    </div>
</div>


<!-- footer -->
<?php get_footer(); ?>