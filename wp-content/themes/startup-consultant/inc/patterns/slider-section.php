<?php 
/**
 * Default Slider Section
 */
return array(
	'title'      => esc_html__( 'Slider Section', 'startup-consultant' ),
	'categories' => array( 'startup-consultant', 'Slider Section' ),
	'content'    => '<!-- wp:group {"className":"main-slider","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group main-slider" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/slider-bg.png' ) ) .'","id":13,"dimRatio":90,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"bottom center","isDark":false,"sizeSlug":"large","className":"slider-bg","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center slider-bg" style="min-height:600px"><img class="wp-block-cover__image-background wp-image-13 size-large" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/slider-bg.png' ) ) .'" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:group {"className":" owl-carousel sliderrr-div","layout":{"type":"default"}} -->
<div class="wp-block-group  owl-carousel sliderrr-div"><!-- wp:columns {"verticalAlignment":"center","className":"slider-boxes","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center slider-boxes" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"slider-left-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-left-box" style="flex-basis:60%"><!-- wp:paragraph {"className":"slider-sub-title wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"17px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"}},"textColor":"background"} -->
<p class="slider-sub-title wow fadeInUp has-background-color has-text-color has-link-color" style="font-size:17px;font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize">'. esc_html__('welcome to business consulting','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wow fadeInUp slider-main-title","style":{"typography":{"fontSize":"42px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"12px"}}},"fontFamily":"startup-consultant-poppins"} -->
<h2 class="wp-block-heading wow fadeInUp slider-main-title has-startup-consultant-poppins-font-family" style="margin-top:12px;font-size:42px;font-style:normal;font-weight:700;line-height:1.3">'. esc_html__('We transform your business','startup-consultant').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp slider-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"6px"}}},"textColor":"secondary"} -->
<p class="wow fadeInUp slider-desc has-secondary-color has-text-color has-link-color" style="margin-top:6px;font-size:15px">'. esc_html__('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btns wow fadeInUp","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons slider-btns wow fadeInUp" style="margin-top:40px"><!-- wp:button {"backgroundColor":"background","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"2px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"borderColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-background-color has-background has-border-color has-background-border-color has-custom-font-size wp-element-button" href="#" style="border-width:2px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('read more','startup-consultant').'</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"2px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"borderColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color has-border-color has-primary-border-color has-custom-font-size wp-element-button" href="#" style="border-width:2px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;background-color:#00000000;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('host an event','startup-consultant').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"slider-right-box wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center slider-right-box wow zoomIn" style="flex-basis:40%"><!-- wp:image {"id":25,"width":"auto","height":"550px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slidr-img.png' ) ) .'" alt="" class="wp-image-25" style="width:auto;height:550px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-boxes","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center slider-boxes" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"slider-left-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-left-box" style="flex-basis:60%"><!-- wp:paragraph {"className":"slider-sub-title wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"17px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"}},"textColor":"background"} -->
<p class="slider-sub-title wow fadeInUp has-background-color has-text-color has-link-color" style="font-size:17px;font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize">'. esc_html__('welcome to business consulting','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wow fadeInUp slider-main-title","style":{"typography":{"fontSize":"42px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"12px"}}},"fontFamily":"startup-consultant-poppins"} -->
<h2 class="wp-block-heading wow fadeInUp slider-main-title has-startup-consultant-poppins-font-family" style="margin-top:12px;font-size:42px;font-style:normal;font-weight:700;line-height:1.3">'. esc_html__('We transform your business','startup-consultant').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp slider-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"6px"}}},"textColor":"secondary"} -->
<p class="wow fadeInUp slider-desc has-secondary-color has-text-color has-link-color" style="margin-top:6px;font-size:15px">'. esc_html__('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btns wow fadeInUp","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons slider-btns wow fadeInUp" style="margin-top:40px"><!-- wp:button {"backgroundColor":"background","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"2px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"borderColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-background-color has-background has-border-color has-background-border-color has-custom-font-size wp-element-button" href="#" style="border-width:2px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('read more','startup-consultant').'</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"2px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"borderColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color has-border-color has-primary-border-color has-custom-font-size wp-element-button" href="#" style="border-width:2px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;background-color:#00000000;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('host an event','startup-consultant').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"slider-right-box wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center slider-right-box wow zoomIn" style="flex-basis:40%"><!-- wp:image {"id":171,"width":"auto","height":"550px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slidr-img1.png' ) ) .'" alt="" class="wp-image-171" style="width:auto;height:550px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-boxes","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center slider-boxes" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"slider-left-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-left-box" style="flex-basis:60%"><!-- wp:paragraph {"className":"slider-sub-title wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"17px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"}},"textColor":"background"} -->
<p class="slider-sub-title wow fadeInUp has-background-color has-text-color has-link-color" style="font-size:17px;font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize">'. esc_html__('welcome to business consulting','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wow fadeInUp slider-main-title","style":{"typography":{"fontSize":"42px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"12px"}}},"fontFamily":"startup-consultant-poppins"} -->
<h2 class="wp-block-heading wow fadeInUp slider-main-title has-startup-consultant-poppins-font-family" style="margin-top:12px;font-size:42px;font-style:normal;font-weight:700;line-height:1.3">'. esc_html__('We transform your business','startup-consultant').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp slider-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"6px"}}},"textColor":"secondary"} -->
<p class="wow fadeInUp slider-desc has-secondary-color has-text-color has-link-color" style="margin-top:6px;font-size:15px">'. esc_html__('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btns wow fadeInUp","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons slider-btns wow fadeInUp" style="margin-top:40px"><!-- wp:button {"backgroundColor":"background","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"2px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"borderColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-background-color has-background has-border-color has-background-border-color has-custom-font-size wp-element-button" href="#" style="border-width:2px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('read more','startup-consultant').'</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"2px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"borderColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color has-border-color has-primary-border-color has-custom-font-size wp-element-button" href="#" style="border-width:2px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;background-color:#00000000;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('host an event','startup-consultant').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"slider-right-box wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center slider-right-box wow zoomIn" style="flex-basis:40%"><!-- wp:image {"id":172,"width":"auto","height":"550px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slidr-img2.png' ) ) .'" alt="" class="wp-image-172" style="width:auto;height:550px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"id":44,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","className":"slider-btm-left"} -->
<figure class="wp-block-image size-full is-resized slider-btm-left"><img src="' . esc_url( get_theme_file_uri( '/assets/images/banner-left.png' ) ) .'" alt="" class="wp-image-44" style="width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":45,"width":"auto","height":"500px","sizeSlug":"full","linkDestination":"none","className":"slider-btm-right"} -->
<figure class="wp-block-image size-full is-resized slider-btm-right"><img src="' . esc_url( get_theme_file_uri( '/assets/images/banner-right.png' ) ) .'" alt="" class="wp-image-45" style="width:auto;height:500px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);