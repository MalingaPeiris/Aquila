<?php

/**
 * 
 * template for entry footer template
 * 
 * to be used inside of wordpress THE LOOP
 * 
 * @package aquila
 */

$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms($the_post_id, ['category', 'post_tag']);

if (empty($article_terms) || !is_array($article_terms)) {
    return;
}

?>

<div class="entry-footer mt-4">
    <?php
    foreach ($article_terms as $key => $article_term) {
    ?>
        <a class="entry-footer-link text-black-50" href="<?php echo esc_url(get_term_link($article_term)); ?>">
            <button class="btn border border-secondary mb-2 mr-2">
                <?php echo esc_html($article_term->name); ?>
            </button>
        </a>
    <?php }
    ?>

</div>