<!-- header -->
<?php get_header(); ?>

<!-- single article -->
<main class="single-article__container">
    <article class="single-article__inner">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <h2 class="single-article__title"><?php echo the_title(); ?></h2>
                <div class="single-article__item">
                    <?php echo the_post_thumbnail("", ["class" => "single-article__item-img"]); ?>
                    <div class="single-article__item-wrap">
                        <div class="single-article__item-text">
                            <?php the_content(); ?>
                        </div>
                        <span class="single-article__item-price">&yen;<?php $price = get_post_meta(get_the_ID(), "price", true); echo number_format($price) ?> +tax</span>
                        <table class="single-article__item-introduction">
                            <tr>
                                <th class="single-article__item-option">SIZE：</th>
                                <td class="single-article__item--detail"><?php echo get_post_meta(get_the_ID(), "size", true); ?></td>
                            </tr>
                            <tr>
                                <th class="single-article__item-option">COLOR：</th>
                                <td class="single-article__item--detail"><?php echo get_post_meta(get_the_ID(), "color", true); ?></td>
                            </tr>
                            <tr>
                                <th class="single-article__item-option">MATERIAL：</th>
                                <td class="single-article__item--detail"><?php echo get_post_meta(get_the_ID(), "material", true); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php endwhile; ?>
        <?php endif; ?>
    </article>
    <div class="single-article__back">
        <a  class="single-article__back--link" href="<?php echo esc_url(home_url("/category/product/")); ?>">Back To Poducts</a>
    </div>
</main>

<!-- footer -->
<?php get_footer(); ?>