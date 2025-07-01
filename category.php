<!-- header -->
<?php get_header(); ?>

<!-- category -->
<div class="category__container">
    <main class="category__inner">
        <h2 class="category__title">
            <?php
                $categories = get_the_category();
                if(!empty($categories)) {
                    foreach( $categories as $category ) {
                        if($category->slug === "product") {
                            echo $category->name;
                        }
                    }
                }
            ?>
        </h2>
        <?php if(have_posts()) :?>
            <ul class="category__item-list">
                <?php while(have_posts()): the_post(); ?>
                    <li class="category__item-wrap">
                        <a class="category__item--link" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail("", ['class' => 'category__item-img']); ?>
                        </a>
                        <span class="category__item-name">
                            <?php the_title(); ?>
                        </span>
                        <span class="category__item-price">
                            &yen;<?php
                                $price = get_post_meta(get_the_ID(), 'price', true);
                                echo number_format($price);
                            ?> +tax
                        </span>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </main>
    <!-- pagination -->
    <?php my_custom_pagination(); ?>
</div>


<!-- footer -->
<?php get_footer(); ?>