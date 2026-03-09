<?php 
/**
 * Default Header
 */
return array(
	'title'      => esc_html__( 'Default Header', 'startup-consultant' ),
	'categories' => array( 'startup-consultant', 'header' ),
	'content'    => '<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"topbar wow fadeInDown","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group topbar wow fadeInDown has-background-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","className":"topbar-boxes","style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center topbar-boxes"><!-- wp:column {"verticalAlignment":"center","className":"top-mail-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-mail-box"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="font-size:16px"><a href="mailto:startupconsultant@example.com"><span class="dashicons dashicons-email"></span>'. esc_html__('startupconsultant@example.com','startup-consultant').'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"top-phone-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-phone-box"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="font-size:16px">&nbsp;<a href="tel:00123456789"><span class="dashicons dashicons-phone"></span>'. esc_html__('+00 123 456 789','startup-consultant').'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"social-icons"} -->
<div class="wp-block-column is-vertically-aligned-center social-icons"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"www.x.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-header wow fadeInDown","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header wow fadeInDown"><!-- wp:columns {"className":"menu-header-boxes","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"12px","left":"12px"}},"border":{"radius":"15px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns menu-header-boxes has-foreground-background-color has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:25%"><!-- wp:group {"className":"logo-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontFamily":"startup-consultant-poppins"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center menu-box" style="flex-basis:55%"><!-- wp:navigation {"textColor":"extra-secondary","overlayTextColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","fontSize":"16px"},"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Gallery","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"' . esc_url( STARTUP_CONSULTANT_BUY_NOW ) . '","kind":"custom","className":"buy-now-button"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-btn-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-btn-box" style="flex-basis:20%"><!-- wp:buttons {"className":"header-btn","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons header-btn"><!-- wp:button {"backgroundColor":"primary","textColor":"foreground","className":"header-button","style":{"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px","textTransform":"capitalize"}}} -->
<div class="wp-block-button header-button"><a class="wp-block-button__link has-foreground-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('register now','startup-consultant').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);