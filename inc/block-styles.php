<?php
/**
 * Ayin Theme: Block Styles
 *
 * @package Ayin
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function ayin_register_block_styles() {

		/**
		 * Register block styles
		 */
		register_block_style(
			'core/latest-posts',
			array(
				'name'         => 'ayin-alternating-grid',
				'label'        => __( 'Alternating Grid', 'ayin' ),
				'style_handle' => 'ayin-alternating-grid',
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'ayin-caption',
				'label'        => __( 'Caption', 'ayin' ),
				'style_handle' => 'ayin-caption',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'         => 'ayin-poetry',
				'label'        => __( 'Poetry', 'ayin' ),
				'style_handle' => 'ayin-poetry',
			)
		);
		register_block_style(
			'a8c/blog-posts',
			array(
				'name'         => 'ayin-alternating-grid',
				'label'        => __( 'Alternating Grid', 'ayin' ),
				'style_handle' => 'ayin-alternating-grid',
			)
		);
	}

	add_action( 'init', 'ayin_register_block_styles' );
}