<?php
/**
 * Latest Blogs
 */
return array(
	'title'      => esc_html__( 'Latest Blogs', 'startup-consultant' ),
	'categories' => array( 'startup-consultant', 'Latest Blogs' ),
	'content'    => '<!-- wp:group {"className":"site-blog-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group site-blog-box"><!-- wp:group {"className":"blog-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-head-box wow zoomIn" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","className":"blog-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"8px"}}},"textColor":"background"} -->
<p class="has-text-align-center blog-sub-title has-background-color has-text-color has-link-color" style="padding-bottom:8px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('our blog','startup-consultant').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"blog-title","style":{"typography":{"fontSize":"32px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-align-center blog-title" style="font-size:32px;font-style:normal;font-weight:700;line-height:1.3;text-transform:capitalize">'. esc_html__('our latest news &amp; blog','startup-consultant').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":59,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"className":"blog-area","layout":{"type":"default"}} -->
<div class="wp-block-query blog-area"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"post-main-area wow zoomIn","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"foreground","layout":{"inherit":false}} -->
<div class="wp-block-group post-main-area wow zoomIn has-foreground-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"25px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"#747474"}}},"color":{"text":"#747474"},"typography":{"fontSize":"16px"}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"date-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"5px"}},"backgroundColor":"background","textColor":"foreground"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);