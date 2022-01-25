<?php

/**
 * cover block pattern template
 * 
 * @package aquila
 */
$cover=sprintf(esc_url(AQUILA_BUILD_IMG_URI . '/patterns/anonymous-Tesla-elon-musk.jpg'))

?>

<!-- wp:cover {"url":"<?php esc_attr($cover);?>","id":76,"minHeight":640,"align":"full","className":"aquila-cover"} -->
<div class="wp-block-cover alignfull has-background-dim aquila-cover" style="min-height:640px"><img class="wp-block-cover__image-background wp-image-76" alt="" src="(<?php esc_attr($cover);?>)" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="has-text-align-center"><strong>We do not forget we do not forgive </strong></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"cyan-bluish-gray"} -->
        <p class="has-text-align-center has-cyan-bluish-gray-color has-text-color">Hello Planet Earth</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"contentJustification":"center"} -->
        <div class="wp-block-buttons is-content-justification-center">
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Blogs</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->