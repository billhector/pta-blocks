<?php
/**
 * Title: Homepage Hero
 * Slug: pta-blocks/homepage-hero
 * Categories: pta-blocks
 * Description: Homepage top hero with primary CTA.
 * Block Types: core/group
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|96","bottom":"var:preset|spacing|96"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--96);padding-bottom:var(--wp--preset--spacing--96)">

    <!-- wp:heading {"level":1,"textAlign":"center","fontSize":"h1-display","style":{"typography":{"lineHeight":"1.1"}}} -->
    <h1 class="wp-block-heading has-text-align-center has-h-1-display-font-size" style="line-height:1.1">Appeal your property taxes — by the book.</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","fontSize":"subtitle","textColor":"secondary","style":{"spacing":{"margin":{"top":"var:preset|spacing|24"}}}} -->
    <p class="has-text-align-center has-secondary-color has-text-color has-subtitle-font-size" style="margin-top:var(--wp--preset--spacing--24)">County-by-county guides with the exact forms, deadlines, and steps for your specific assessor's office.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|32"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--32)">
        <!-- wp:button {"backgroundColor":"accent","textColor":"white"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button" href="#states">Find your state →</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
