<?php

/**
 * POsts Carousel
 * 
 * @package aquila
 */


    $args = [
        'post_per_page' => 10,
        'post_type' => 'post',
        'update_post_meta_cache' => false,
        'update_post_term-cache' => false,
    ];

    $post_query = new \WP_query($args);
?>

<div class="posts-carousel px-5">
    <?php
    if ($post_query->have_posts()) :
        while ($post_query->have_posts()) :
            $post_query->the_post();
    ?>
            <div class='card'>
                <div class="thumbnail">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail(
                        get_the_ID(),
                        'featured-thumbnail',
                        [
                            'sizes' => '(max-wdith: 350px) 350px,233px',
                            'class' => 'w-100',
                        ]
                    );
                } else { ?>
                    <div><img src="https://via.placeholder.com/510x340" class="w-100" alt=""></div>
                <?php
                }
                ?>
                </div>
                <div class="card-body">
                    <?php
                     the_title('<h3 class="card-title">', '</h3>');
                     aquila_the_excerpt(100);
                    ?>
                    <a href="<?php echo esc_url(get_the_permalink());?>"><?php esc_html_e('View more', 'aquila'); ?></a>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>