<?php

function getTemplatePart($slug = null, $name = null, array $params = array()) {
	global $wp_query;
	
	do_action("get_template_part_{$slug}", $slug, $name);
	
	$templates = array();
	if (isset($name)) {
		$templates[] = "{$slug}-{$name}.php";
	}
	$templates[] = "{$slug}.php";
	$_template_file = locate_template($templates, false, false);

	if (is_array($wp_query->query_vars)) {
		extract($wp_query->query_vars, EXTR_SKIP);
	}
	extract($params, EXTR_SKIP);

	require($_template_file);
}

function woocommerce_output_related_products() {
 woocommerce_related_products(40,2);       // Display 4 products in 2 columns
 }

function the_excerpt_max_charlength($length = 0) {
	$excerpt = strip_tags(get_the_excerpt());
    $arrString = explode(' ', $excerpt);
    $str = array_slice($arrString, 0, $length);
    if(count($arrString) > $length){
        $str = implode( ' ', $str).'...';
    }else
    {
        $str = implode( ' ', $str);
    }
    return $str;
}
function getGaleryFromPost($post, $groupGallery = null) {
    $content = get_the_content($post->ID); 
    $pattern = get_shortcode_regex();
    preg_match_all("/$pattern/s", $content, $match);
    $attachments = array();
    if(isset($match[2]) && $match[3]){
        foreach ($match[2] as $key => $m2) {
            if($m2 == "gallery"){
                $atts = shortcode_parse_atts($match[3][$key]);
				$att_group = !empty($atts['group']) ? $atts['group'] : '';
				$existGallery = is_array($atts) && count($atts) > 0 && (empty($groupGallery) || $att_group == $groupGallery);
				if ($existGallery) {
					$gallery = array();
					foreach ($atts as $katt => $vatt) {
						if ('ids' == $katt) {
							$gallery['ids'] = isset($atts['ids']) ? explode(',', $atts['ids']) : get_children('post_type=attachment&post_mime_type=image&post_parent=' . $objpost->ID . '&order=ASC&orderby=menu_order ID');
						} else {
							$gallery[$katt] = $vatt;
						}
					}
					$attachments[] = $gallery;
				}
            }
        }
    }
    return count($attachments)?$attachments:false;
}