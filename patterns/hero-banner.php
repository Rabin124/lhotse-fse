<?php

/**
 * Title: Hero banner
 * Slug: lhotse/hero-banner
 * Categories: featured
 * Keywords: hero Banner
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/about.jpg"
];
?>

<!-- wp:cover {"url":"http://localhost/lhotse-fxc/wp-content/uploads/2023/06/about.jpg","id":22,"dimRatio":0,"focalPoint":{"x":0.48,"y":0.49},"className":"lhotse-slider-main-slider"} -->
<div class="wp-block-cover lhotse-slider-main-slider"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-22" alt="" src="http://localhost/lhotse-fxc/wp-content/uploads/2023/06/about.jpg" style="object-position:48% 49%" data-object-fit="cover" data-object-position="48% 49%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|80"}}},"fontSize":"x-large"} -->
<p class="has-text-align-left has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);margin-left:var(--wp--preset--spacing--80)"><strong>Create Your Own World</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"left":"var:preset|spacing|80"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-left:var(--wp--preset--spacing--80)">It is a crafty team of designers, developers, copywriters and strategists. We work with motivated clients across a wide range of sectors including established brands, startups and entrepreneurs.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":".btn","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons .btn"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"36px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:36px">About US <strong>&gt;</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->