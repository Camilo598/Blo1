<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

class QiAddonsForElementor_Timeline_Shortcode_Elementor extends QiAddonsForElementor_Elementor_Widget_Base {

	public function __construct( array $data = [], $args = null ) {
		$this->set_shortcode_slug( 'qi_addons_for_elementor_timeline' );

		parent::__construct( $data, $args );
	}
}

qi_addons_for_elementor_register_new_elementor_widget( new QiAddonsForElementor_Timeline_Shortcode_Elementor() );
