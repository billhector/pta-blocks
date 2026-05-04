<?php
/**
 * Title: Homepage State Grid
 * Slug: pta-blocks/homepage-state-grid
 * Categories: pta-blocks
 * Description: Static 50-state grid linking to /{state}/ landing pages.
 * Block Types: core/group
 */

$states = [
    'alabama','alaska','arizona','arkansas','california','colorado','connecticut','delaware',
    'florida','georgia','hawaii','idaho','illinois','indiana','iowa','kansas','kentucky',
    'louisiana','maine','maryland','massachusetts','michigan','minnesota','mississippi',
    'missouri','montana','nebraska','nevada','new-hampshire','new-jersey','new-mexico',
    'new-york','north-carolina','north-dakota','ohio','oklahoma','oregon','pennsylvania',
    'rhode-island','south-carolina','south-dakota','tennessee','texas','utah','vermont',
    'virginia','washington','west-virginia','wisconsin','wyoming',
];
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|48","bottom":"var:preset|spacing|48"}}},"anchor":"states"} -->
<div id="states" class="wp-block-group" style="padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48)">

    <!-- wp:heading {"level":2,"textAlign":"center","fontSize":"h2"} -->
    <h2 class="wp-block-heading has-text-align-center has-h-2-font-size">Find your state</h2>
    <!-- /wp:heading -->

    <!-- wp:html -->
    <ul style="list-style:none; padding:0; margin: 2rem auto; display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:0.5rem; max-width:960px;">
        <?php foreach ($states as $slug):
            $name = ucwords(str_replace('-', ' ', $slug));
        ?>
        <li><a href="/<?php echo esc_attr($slug); ?>/" style="display:block; padding:0.75rem 1rem; background:var(--wp--preset--color--white); border-radius:6px; text-decoration:none; box-shadow: 0 1px 2px rgba(0,0,0,0.05);"><?php echo esc_html($name); ?></a></li>
        <?php endforeach; ?>
    </ul>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->
