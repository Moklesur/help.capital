<?php
/**
 * Team widget.
 *
 * @package themetim
 */

class Themetim_editor_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-editor-widget',
			__( 'ThemeTim Editor', 'themetim' ),
			array(
				'description' => __( '', 'themetim' ),
			),
			array(),

			array(
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'themetim' ),
					'default' => 'text-left',
					'options' => array(
						'text-left' => __( 'Text Left', 'themetim' ),
						'text-center' => __( 'Text Center', 'themetim' ),
						'text-right' => __( 'Text Right', 'themetim' ),
					)
				),

				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'themetim' ),
				),
				'icon_color' => array(
					'type' => 'color',
					'label' => __( 'Color', 'themetim' ),
					'default' => '#000'
				),
				'texteditor' => array(
					'type' => 'tinymce',
					'label' => __( '', 'themetim' ),
					'default' => '',
					'rows' => 7,
					'default_editor' => 'html',
					'button_filters' => array(
						'mce_buttons' => array( $this, 'filter_mce_buttons' ),
						'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
						'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
						'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
						'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
					),
				),
				'button_text' => array(
					'type' => 'text',
					'label' => __('Button Title', 'themetim'),
					'default' => ''
				),
				'button_style' => array(
					'type' => 'select',
					'label' => __( 'Button Style', 'themetim' ),
					'default' => 'btn-default',
					'options' => array(
						'btn-default' => __( 'Default', 'themetim' ),
						'btn-primary' => __( 'Primary', 'themetim' ),
						'btn-success' => __( 'Success', 'themetim' ),
					)
				),
				'button_url' => array(
					'type' => 'link',
					'label' => __('Button URL', 'themetim'),
					'default' => ''
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-editor-widget', __FILE__, 'Themetim_editor_Widget' );
