<?php

// Registers an editor stylesheet for the theme.

function mcd_theme_add_editor_styles() {
  add_editor_style( 'dist/css/wp-editor.css' );
}
add_action( 'admin_init', 'mcd_theme_add_editor_styles' );



// Add Formats Dropdown Menu To MCE

if ( ! function_exists( 'mcd_style_select' ) ) {
	function mcd_style_select( $buttons ) {
		array_push( $buttons, 'styleselect' );
		return $buttons;
	}
}
add_filter( 'mce_buttons', 'mcd_style_select' );



// Add new styles to the TinyMCE "formats" menu dropdown

if ( ! function_exists( 'mcd_styles_dropdown' ) ) {
	function mcd_styles_dropdown( $settings ) {

		// Create array of new styles
		$new_styles = array(
			array(
				'title'	=> 'Title',
				'items'	=> array(
					array(
						'title'		=> 'Extra Large',
						'block'	=> 'h1',
            			'attributes' => array('class' => 'xlarge-title')
					),
				),
			),
			array(
				'title'	=> __( 'Paragraphs', 'p' ),
				'items'	=> array(
					array(
						'title'		=> __('Paragraph Extra Large','p'),
						'block'	=> 'p',
            			'attributes' => array('class' => 'paragraph-xl')
					),
					array(
						'title'		=> __('Paragraph Large','p'),
						'block'	=> 'p',
            			'attributes' => array('class' => 'paragraph-lg')
					),
					array(
						'title'		=> __('Default','p'),
						'block'	=> 'p',
            			'attributes' => array('class' => 'paragraph')
					),
					array(
						'title'		=> __('Paragraph Small','p'),
						'block'	=> 'p',
            			'attributes' => array('class' => 'paragraph-sm')
					),
				),
			),
		);

		// Merge old & new styles
		$settings['style_formats_merge'] = false;

		// Add new styles
		$settings['style_formats'] = json_encode( $new_styles );

		// Return New Settings
		return $settings;

	}
}
add_filter( 'tiny_mce_before_init', 'mcd_styles_dropdown' );