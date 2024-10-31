<?php 

function rsffl_add_footer($content){

	global $rsffl_options;

	$footer_output = '<hr>';
	$footer_output .= '<div class="footer_content">';
	$footer_output .= '<span class= "dashicons dashicons-facebook"></span> Find me on <a style="color:'.$rsffl_options['link_color'].'" target="_blank" href="'.$rsffl_options['facebook_url'].'">Facebook</a>';
	$footer_output .= '</div>';

	if($rsffl_options['show_in_feed']){
		if(is_single() || is_home() && $rsffl_options['enable']){
			return $content . $footer_output;
		}
	} else{
		if(is_single() && $rsffl_options['enable']){
			return $content . $footer_output;
		}
	}
	
	return $content;

}

add_filter('the_content', 'rsffl_add_footer');