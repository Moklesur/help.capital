<?php
/**
 * Client widget.
 *
 * @package themetim
 */

class Themetim_Client_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-client-widget',
			__( 'ThemeTim Client', 'themetim' ),
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
				'heading_color' => array(
					'type' => 'color',
					'label' => __( 'Color', 'themetim' ),
					'default' => '#000'
				),
				'client' => array(
					'type'       => 'repeater',
					'label'      => __( 'Client', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-client-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'icon' => array(
							'type' => 'icon',
							'label' => __('Select an icon', 'themetim'),
						),
						'icon_size' => array(
							'type' => 'number',
							'label' => __( 'Icon Size', 'themetim' ),
							'default' => '16'
						),
						'icon_color' => array(
							'type' => 'color',
							'label' => __( 'Icon Color', 'themetim' ),
							'default' => '#000'
						),
						'client_title' => array(
							'type'  => 'text',
							'label' => __( 'Text', 'themetim' ),
						),
					),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-client-widget', __FILE__, 'Themetim_Client_Widget' );
