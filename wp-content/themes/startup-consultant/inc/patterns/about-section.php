<?php 
/**
 * Default About Section
 */
return array(
	'title'      => esc_html__( 'About Section', 'startup-consultant' ),
	'categories' => array( 'startup-consultant', 'About Section' ),
	'content'    => '<!-- wp:group {"className":"about-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group about-section"><!-- wp:columns {"className":"about-boxes"} -->
<div class="wp-block-columns about-boxes"><!-- wp:column {"width":"45%","className":"about-left-box wow fadeInDown"} -->
<div class="wp-block-column about-left-box wow fadeInDown" style="flex-basis:45%"><!-- wp:image {"id":57,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"about-image1","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full has-custom-border about-image1"><img src="' . esc_url( get_theme_file_uri( '/assets/images/about-img1.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":58,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right","className":"about-image2","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"width":"8px"}},"borderColor":"foreground"} -->
<figure class="wp-block-image alignright size-full has-custom-border about-image2"><img src="' . esc_url( get_theme_file_uri( '/assets/images/about-img2.png' ) ) .'" alt="" class="has-border-color has-foreground-border-color wp-image-58" style="border-width:8px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%","className":"about-right-box wow fadeInUp"} -->
<div class="wp-block-column about-right-box wow fadeInUp" style="flex-basis:55%"><!-- wp:paragraph {"className":"about-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontFamily":"startup-consultant-poppins"} -->
<p class="about-sub-title has-background-color has-text-color has-link-color has-startup-consultant-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('about us','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"about-main-title","style":{"typography":{"fontSize":"35px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"15px"}}},"fontFamily":"startup-consultant-poppins"} -->
<h3 class="wp-block-heading about-main-title has-startup-consultant-poppins-font-family" style="margin-top:15px;font-size:35px;font-style:normal;font-weight:600;line-height:1.3;text-transform:capitalize">'. esc_html__('our skilled team grow your business.','startup-consultant').'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"about-desc","style":{"typography":{"fontSize":"18px","lineHeight":"1.8"},"spacing":{"margin":{"top":"0px","bottom":"30px"}}}} -->
<p class="about-desc" style="margin-top:0px;margin-bottom:30px;font-size:18px;line-height:1.8">'. esc_html__('Sed ur perspiciatis unde omnis iste natus error sitvolu arcu commodo undeomns ptatem accus antium mque perspiciatis unde omnis iste natus error sitvolu arcu commodo undeomns ptatem accus antium mque','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"about-list","style":{"spacing":{"padding":{"left":"0px"}}}} -->
<ul style="padding-left:0px" class="wp-block-list about-list"><!-- wp:list-item {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
<li style="padding-bottom:var(--wp--preset--spacing--30);font-size:18px"><span class="dashicons dashicons-arrow-right-alt"></span>'. esc_html__('One-stop solution','startup-consultant').'</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
<li style="padding-bottom:var(--wp--preset--spacing--30);font-size:18px"><span class="dashicons dashicons-arrow-right-alt"></span>'. esc_html__('Effective solutions','startup-consultant').'</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
<li style="padding-bottom:var(--wp--preset--spacing--30);font-size:18px"><span class="dashicons dashicons-arrow-right-alt"></span>'. esc_html__('Leading in marketing','startup-consultant').'</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:group {"className":"bar-box","layout":{"type":"default"}} -->
<div class="wp-block-group bar-box"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"label","style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"body-text"} -->
<p class="has-text-align-center label has-body-text-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:500">'. esc_html__('Business Consulting','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"percent","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"background"} -->
<p class="has-text-align-center percent has-background-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:15px;font-style:normal;font-weight:500">'. esc_html__('87%','startup-consultant').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#d9d9d9"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"6px"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;background-color:#d9d9d9;margin-top:6px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"className":"bar","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"spacing":{"padding":{"top":"5px","bottom":"5px"}}},"backgroundColor":"background","fontFamily":"urbanist"} -->
<p class="bar has-background-background-color has-background has-urbanist-font-family" style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:5px;padding-bottom:5px;font-size:14px;font-style:normal;font-weight:600"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"about-btm-box","style":{"spacing":{"blockGap":"var:preset|spacing|80","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group about-btm-box" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"about-btm-left","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group about-btm-left"><!-- wp:image {"id":92,"sizeSlug":"full","linkDestination":"none","className":"is-style-default about-profile-img","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-full has-custom-border is-style-default about-profile-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/about-profile.png' ) ) .'" alt="" class="wp-image-92" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"about-profile-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group about-profile-content"><!-- wp:heading {"level":6,"className":"about-profile-name","style":{"typography":{"fontSize":"17px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}}} -->
<h6 class="wp-block-heading about-profile-name" style="font-size:17px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('jennifer brown','startup-consultant').'</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"about-profile-text","style":{"spacing":{"margin":{"top":"0px"}},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="about-profile-text has-secondary-color has-text-color has-link-color" style="margin-top:0px;font-size:14px">'. esc_html__('CEO &amp; Founder of Manit','startup-consultant').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"about-btn"} -->
<div class="wp-block-buttons about-btn"><!-- wp:button {"backgroundColor":"background","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-background-color has-background has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('read more','startup-consultant').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);