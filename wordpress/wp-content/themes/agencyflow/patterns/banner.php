<?php
/**
 * Title: Banner
 * Slug: agencyflow/banner
 * Categories: agencyflow
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundSize":"cover","backgroundPosition":"50% 50%"},"dimensions":{"minHeight":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg","id":1182,"dimRatio":50,"customOverlayColor":"#002b59","isUserOverlayColor":true,"minHeight":650,"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#002b59"></span><img class="wp-block-cover__image-background wp-image-1182" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"40px","top":"40px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"56px"}},"textColor":"base-2"} -->
<h1 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="font-size:56px"><?php echo esc_html__( 'Smart Solutions for a Brighter Future.', 'agencyflow' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-bottom:28px"><?php echo esc_html__( 'Massa maecenas litora sit tortor facilisi eget dictum tristique curabitur aliquam facilisis mus tellus platea dapibus commodo magna aliquet integer praesent volutpat letius ac elementum lectus', 'agencyflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"button-hover-color","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-button-hover-color-background-color has-background wp-element-button"><?php echo esc_html__( 'Explore More', 'agencyflow' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base-2","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"borderColor":"base-2"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-2-color has-text-color has-link-color has-border-color has-base-2-border-color wp-element-button"><?php echo esc_html__( 'Get Started', 'agencyflow' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->