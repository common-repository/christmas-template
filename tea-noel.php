<?php
/**
 * Plugin Name: Tea noel
 * Plugin URI: http://teathemes.net
 * Description: Plugin Noel For WP
 * Version: 1.0
 * Author: Daniel Truong
 * Author URI: http://teathemes.net 
 * License: GPLv2 or later 
 */
define( 'TEA_NOEL_DIR', untrailingslashit( dirname( __FILE__ ) ) );

 define('TEA_NOEL_URL',plugin_dir_url(__FILE__ ));
function tea_enqueue_js(){
	wp_enqueue_script('tea-noel-du-mau' , TEA_NOEL_URL.'/assets/js/du-mau.js',array(),'1',true);
	$wnm_custom = array( 'plugin_url' => TEA_NOEL_URL.'/assets' );
    wp_localize_script( 'tea-noel-du-mau', 'TEA_WP', $wnm_custom );
	wp_enqueue_script('swfobject' , TEA_NOEL_URL.'/assets/js/dswfobject.min.js',array(),'1',true);
	wp_enqueue_script('tea-noel-js' , TEA_NOEL_URL.'/assets/js/tea-noel.js',array(),'1',true);
 	$wnm_custom = array( 'plugin_url' => TEA_NOEL_URL.'/assets' );
    wp_localize_script( 'tea-noel-js-cs', 'TEA_WP', $wnm_custom );
 	//
}
add_action('wp_enqueue_scripts', 'tea_enqueue_js');
function tea_enqueue_style(){
	 wp_enqueue_style('tea_noel-css', TEA_NOEL_URL.'/assets/css/style.css' );
}
add_action('wp_enqueue_scripts','tea_enqueue_style' );
add_action('wp_head','tea_noel' );
if(!function_exists('tea_noel')){
	function tea_noel(){
		?>
<div class="tea-noel">
<img src="<?php echo esc_url(TEA_NOEL_URL ); ?>assets/images/nhatbanaz.com-top-left.png" style='position:fixed;z-index:9999;top:0;left:0' />
<img src='<?php echo esc_url(TEA_NOEL_URL ); ?>assets/images/nhatbanaz.com-top-right.png'
  style='position:fixed;z-index:9999;top:0;right:0' />
<div style='position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:70px;background:url(<?php echo esc_url(TEA_NOEL_URL ); ?>/assets/images/nhatbanaz.com-footer.png) repeat-x bottom left;'></div>
<img src='<?php echo esc_url(TEA_NOEL_URL ); ?>/assets/images/nhatbanaz.com-bottomleft.png' style='position:fixed;z-index:9999;bottom:20px;left:20px' />
	<div class='b-page_newyear'>
	  <div class='b-page__content'>
	    <i class='b-head-decor'>
	<i class='b-head-decor__inner b-head-decor__inner_n1'>
	<div class='b-ball b-ball_n1 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n2 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    <i class='b-head-decor__inner b-head-decor__inner_n2'>
	<div class=' b-ball b-ball_n1 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n2 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    <i class='b-head-decor__inner b-head-decor__inner_n3'>
	<div class=' b-ball b-ball_n1 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n2 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    <i class='b-head-decor__inner b-head-decor__inner_n4'>
	<div class=' b-ball b-ball_n1 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n2 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    <i class='b-head-decor__inner b-head-decor__inner_n5'>
	<div class=' b-ball b-ball_n1 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n2 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    <i class='b-head-decor__inner b-head-decor__inner_n6'>
	<div class=' b-ball b-ball_n1 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n2 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    <i class='b-head-decor__inner b-head-decor__inner_n7'>
	<div class=' b-ball b-ball_n1 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div> 
	<div class='b-ball b-ball_n2 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n3 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n4 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n5 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n6 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n7 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n8 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_n9 b-ball_bounce '><div class='b-ball__right '></div><div class='b-ball__i '></div></div>
	<div class='b-ball b-ball_i1'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i2'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i3'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i4'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i5'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	<div class='b-ball b-ball_i6'><div class='b-ball__right'></div><div class='b-ball__i'></div></div>
	</i>
	    </i>
	  </div>
	</div>
 </div>
		<?php 
	}
}