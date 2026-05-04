<?php
/**
 * Title: County Hero
 * Slug: pta-blocks/county-hero
 * Categories: pta-blocks
 * Description: County name + price + Stripe buy button. Top-of-page hero for county-guide posts.
 * Block Types: core/group
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|48","bottom":"var:preset|spacing|48"}},"border":{"radius":"16px"}},"backgroundColor":"table-even"} -->
<div class="wp-block-group has-table-even-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48)">

    <!-- wp:post-title {"level":1,"textAlign":"center","fontSize":"h1"} /-->

    <!-- wp:paragraph {"align":"center","fontSize":"subtitle","textColor":"secondary"} -->
    <p class="has-text-align-center has-secondary-color has-text-color has-subtitle-font-size">Step-by-step property tax appeal guide. Forms, deadlines, and contact info — everything you need to file.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|24"}}}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--24)">
        <!-- wp:pta-core/buy-button {"priceId":"price_1TTTewAjxIe1NoVQHhVDUe42","label":"Get the guide — $67"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"center","fontSize":"caption","textColor":"secondary","style":{"spacing":{"margin":{"top":"var:preset|spacing|12"}}}} -->
    <p class="has-text-align-center has-secondary-color has-text-color has-caption-font-size" style="margin-top:var(--wp--preset--spacing--12)">100% money-back guarantee · 30 days · lifetime updates</p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
