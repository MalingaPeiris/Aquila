<?php

/**
 * content template
 * 
 * @package aquila
 */
?>

<div class="entry-content">
    <?php
    if (is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('Continue Reading %s <span class="meta-nav">&rarr;</span>', 'aquila'),
                    [
                        'span' => [
                            'class' => []
                                    ]
                    ]
                        ),
                        the_title('<span calss="scren-reader-text">', '</span>', false)
            )
        );
    }else{
        //if it is not a single page post
        aquila_the_excerpt(150);
        echo aquila_excerpt_more();
    }
    ?>
</div>