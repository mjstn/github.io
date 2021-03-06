<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


function mc_kses_post( $string ) {
	if ( !is_string( $string ) ) {
		return $string;
	} else {
		return wp_kses( $string, 'mycalendar' );
	}
}


/**
 * My Calendar needs to allow input and select in posts and a variety of other key elements; also provide support for schema.org data.
 * 
 * Call using wp_kses( $data, 'mycalendar' );
 */
add_filter( 'wp_kses_allowed_html', 'mc_allowed_tags', 10, 2 );
function mc_allowed_tags( $tags, $context ) {
	if ( $context == 'mycalendar' ) {
		global $allowedposttags;
		$tags = $allowedposttags;
		$tags['input'] = array(
			'type' => true,
			'value' => true,
			'name' => true,
			'class' => true,
			'aria-labelledby' => true,
			'aria-describedby' => true,
			'disabled' => true,
			'readonly' => true,
			'min' => true,
			'max' => true,
		);
		$tags['select'] = array(
			'name' => true,
			'id' => true,
			'class' => true
		);
		$tags['span'] = array(
			'dir' => true,
			'align' => true,
			'lang' => true,
			'xml:lang' => true,
			'itemprop' => true,
			'itemscope' => true,
			'itemtype' => true,
			'class' => true,
		);
		$tags['button'] = array(
			'name' => true,
			'type' => true,
			'disabled' => true,
			'class' => true,
		);
		$tags['form'] = array( 
			'action' => true,
			'method' => true,
			'class' => true,
			'id' => true,
			'tabindex' => true,
		);
		$tags['div'] = array(
			'class' => true,
			'id' => true,
			'aria-live' => true,
		);
		$tags['fieldset'] = array();
		$tags['legend'] = array();
		$tags['p'] = array(
			'class' => true,
		);
		$tags['img'] = array(
			'class'    => true,
			'src'      => true,
			'alt'      => true,
			'width'    => true,
			'height'   => true,
			'id'       => true,
			'longdesc' => true,
			'tabindex' => true
		);
	}
	
	return $tags;
}
