<?php 
/**
 * Default Our Process Section
 */
return array(
	'title'      => esc_html__( 'Our Process Section', 'startup-consultant' ),
	'categories' => array( 'startup-consultant', 'Our Process Section' ),
	'content'    => '<!-- wp:group {"className":"ourprocess-section","layout":{"type":"default"}} -->
<div class="wp-block-group ourprocess-section"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/slider-bg.png' ) ) .'","id":143,"dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"sizeSlug":"large","className":"ourprocess-bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover ourprocess-bg" style="padding-top:var(--wp--preset--spacing--80);padding-right:0px;padding-bottom:var(--wp--preset--spacing--80);padding-left:0px"><img class="wp-block-cover__image-background wp-image-143 size-large" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/slider-bg.png' ) ) .'" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ourprocess-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group ourprocess-head-box wow zoomIn" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","className":"process-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"8px"}}},"textColor":"background"} -->
<p class="has-text-align-center process-sub-title has-background-color has-text-color has-link-color" style="padding-bottom:8px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('our process','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"process-title","style":{"typography":{"fontSize":"32px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-align-center process-title" style="font-size:32px;font-style:normal;font-weight:700;line-height:1.3;text-transform:capitalize">'. esc_html__('our best working process','startup-consultant').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"ourprocess-boxes"} -->
<div class="wp-block-columns ourprocess-boxes"><!-- wp:column {"className":"process-box wow rollIn","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"30px","bottom":"40px","left":"20px","right":"20px"}}},"backgroundColor":"foreground"} -->
<div class="wp-block-column process-box wow rollIn has-foreground-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:30px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:html -->
<span class="dashicons dashicons-chart-bar"></span>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"process-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"25px","bottom":"12px"}}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-center process-title has-primary-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:12px;font-size:24px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('cost-effective','startup-consultant').'</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"process-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center process-desc has-primary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:15px">'. esc_html__('Perspi ciatis und omnis iste natus volupt atemi omnis iste natus','startup-consultant').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"process-box wow rollIn","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"30px","bottom":"40px","left":"20px","right":"20px"}}},"backgroundColor":"foreground"} -->
<div class="wp-block-column process-box wow rollIn has-foreground-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:30px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:html -->
<span class="dashicons dashicons-lightbulb"></span>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"process-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"25px","bottom":"12px"}}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-center process-title has-primary-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:12px;font-size:24px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('idea create','startup-consultant').'</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"process-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center process-desc has-primary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:15px">'. esc_html__('Perspi ciatis und omnis iste natus volupt atemi omnis iste natus','startup-consultant').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"process-box wow rollIn","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"30px","bottom":"40px","left":"20px","right":"20px"}}},"backgroundColor":"foreground"} -->
<div class="wp-block-column process-box wow rollIn has-foreground-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:30px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:html -->
<span class="dashicons dashicons-format-chat"></span>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"process-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"25px","bottom":"12px"}}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-center process-title has-primary-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:12px;font-size:24px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('consultancy','startup-consultant').'</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"process-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center process-desc has-primary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:15px">'. esc_html__('Perspi ciatis und omnis iste natus volupt atemi omnis iste natus','startup-consultant').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"process-box wow rollIn","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"30px","bottom":"40px","left":"20px","right":"20px"}}},"backgroundColor":"foreground"} -->
<div class="wp-block-column process-box wow rollIn has-foreground-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:30px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:html -->
<span class="dashicons dashicons-awards"></span>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"process-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"25px","bottom":"12px"}}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-center process-title has-primary-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:12px;font-size:24px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('success','startup-consultant').'</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"process-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center process-desc has-primary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:15px">'. esc_html__('Perspi ciatis und omnis iste natus volupt atemi omnis iste natus','startup-consultant').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);