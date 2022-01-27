<?php
/**
 * Theme Customizer.
 *
 * @package Webion
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */

function webion_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'webion-theme/customizer/options' , array(
		'prefix'        => 'webion',
		'path'          => get_theme_file_path( 'framework/modules/customizer/' ),
		'capability'    => 'edit_theme_options',
		'type'          => 'theme_mod',
		'fonts_manager' => new CX_Fonts_Manager(),
		'options'       => array(
			
			/** `Site Identity` section */
			'logo_retina' => array(
				'title' 			=> esc_html__( 'Retina Logo', 'webion' ),
				'section' 			=> 'title_tagline',
				'priority' 			=> 8,
				'field' 			=> 'image',
				'type' 				=> 'control',
				'dynamic_css' 		=> true,
			),
			'logo_retina_height' => array(
				'title' 			=> esc_html__( 'Logo Height, px', 'webion' ),
				'section' 			=> 'title_tagline',
				'priority' 			=> 9,
				'default' 			=> 40,
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 20,
					'max'  => 100,
					'step' => 1,
				),
				'type' 				=> 'control',
				'dynamic_css' 		=> true,
			),
			'site_tagline' => array(
				'title' 			=> esc_html__( 'Show Site Tagline', 'webion' ),
				'section' 			=> 'title_tagline',
				'priority' 			=> 10,
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),

			/** `General` panel */
			'general_settings' => array(
				'title'       => esc_html__( 'General Site settings', 'webion' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Favicon` section */
			'favicon' => array(
				'title'       => esc_html__( 'Favicon', 'webion' ),
				'priority'    => 25,
				'panel'       => 'general_settings',
				'type'        => 'section',
			),

			/** `Preloader` section */
			'preloader_section' => array(
				'title'    => esc_html__( 'Page Preloader', 'webion' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'webion' ),
				'section'  => 'preloader_section',
				'priority' => 30,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			
			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'webion' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'webion' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'webion' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'webion' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'webion' ),
					'minified' => esc_html__( 'Minified', 'webion' ),
				),
				'type'    => 'control',
			),
			'breadcrumbs_text_color' => array(
				'title'       => esc_html__( 'Text Color', 'webion' ),
				'description' => esc_html__( 'Here you can choose whether your text should be light or dark. If you are working with a dark background, then your text should be light. If your background is light, then your text should be set to dark.', 'webion' ),
				'section'     => 'breadcrumbs',
				'default'     => 'dark',
				'field'       => 'select',
				'choices'     => webion_get_text_color(),
				'type'        => 'control',
			),
			'breadcrumbs_page_title_visibillity' => array(
				'title' 			=> esc_html__( 'Show Page Title', 'webion' ),
				'section' 			=> 'breadcrumbs',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'breadcrumbs_front_page_title_visibillity' => array(
				'title' 			=> esc_html__( 'Show Front Page Title', 'webion' ),
				'section' 			=> 'breadcrumbs',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'breadcrumbs_single_post_page_title' => array(
				'title' 			=> esc_html__( 'Show Single Post Page Title', 'webion' ),
				'section' 			=> 'breadcrumbs',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'breadcrumbs_product_page_title' => array(
				'title' 			=> esc_html__( 'Show Product Page Title', 'webion' ),
				'section' 			=> 'breadcrumbs',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
            'breadcrumbs_blog_page_title' => array(
                'title' 			=> esc_html__( 'Show Blog Page Title', 'webion' ),
                'section' 			=> 'breadcrumbs',
                'default' 			=> false,
                'field' 			=> 'checkbox',
                'type' 				=> 'control',
            ),

			/** `Page Layout` section */
			'page_layout' => array(
				'title' 			=> esc_html__( 'Page Layout', 'webion' ),
				'priority' 			=> 55,
				'type' 				=> 'section',
				'panel' 			=> 'general_settings',
			),
			'container_type' => array(
				'title' 			=> esc_html__( 'Container Type', 'webion' ),
				'section' 			=> 'page_layout',
				'default' 			=> 'boxed',
				'field' 			=> 'select',
				'choices' 			=> array(
					'boxed'     => esc_html__( 'Boxed', 'webion' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'webion' ),
				),
				'type' 				=> 'control',
			),
			'container_width' => array(
				'title' 			=> esc_html__( 'Container Width, px', 'webion' ),
				'section' 			=> 'page_layout',
				'default' 			=> 1170,
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 700,
					'max'  => 2000,
					'step' => 1,
				),
				'type' 				=> 'control',
				'dynamic_css' 		=> true,
			),
			'sidebar_width' => array(
				'title' 			=> esc_html__( 'Sidebar width', 'webion' ),
				'section' 			=> 'page_layout',
				'default' 			=> '1/3',
				'field' 			=> 'select',
				'choices' 			=> array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type' 				=> 'control',
			),

			/* Sticky Sidebar */
			'sticky_sidebar' => array(
				'title' 			=> esc_html__( 'Sticky Sidebar', 'webion' ),
				'section' 			=> 'page_layout',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),

			/** `Preloader` section */
            'totop_section' => array(
                'title'    => esc_html__( 'ToTop Button', 'webion' ),
                'priority' => 60,
                'type'     => 'section',
                'panel'    => 'general_settings',
            ),
            'totop_visibility' => array(
                'title'   => esc_html__( 'Show ToTop Button', 'webion' ),
                'section' => 'totop_section',
                'priority' => 60,
                'default' => false,
                'field'   => 'checkbox',
                'type'    => 'control',
            ),
            'totop_icon_color' => array(
                'title' 			=> esc_html__( 'Icon color', 'webion' ),
                'section'           => 'totop_section',
                'priority'          => 60,
                'default' 			=> '#ffffff',
                'field' 			=> 'hex_color',
                'type' 				=> 'control',
                'conditions' 		=> array(
                    'totop_visibility' => true,
                ),
            ),
            'totop_icon_hover_color' => array(
                'title' 			=> esc_html__( 'Icon hover color', 'webion' ),
                'section'           => 'totop_section',
                'priority'          => 60,
                'default' 			=> '#ffffff',
                'field' 			=> 'hex_color',
                'type' 				=> 'control',
                'conditions' 		=> array(
                    'totop_visibility' => true,
                ),
            ),
            'totop_bg_color' => array(
                'title' 			=> esc_html__( 'Background color', 'webion' ),
                'section'           => 'totop_section',
                'priority'          => 60,
                'default' 			=> '#303030',
                'field' 			=> 'hex_color',
                'type' 				=> 'control',
                'conditions' 		=> array(
                    'totop_visibility' => true,
                ),
            ),
            'totop_bg_hover_color' => array(
                'title' 			=> esc_html__( 'Background hover color', 'webion' ),
                'section'           => 'totop_section',
                'priority'          => 60,
                'default' 			=> '#838383',
                'field' 			=> 'hex_color',
                'type' 				=> 'control',
                'conditions' 		=> array(
                    'totop_visibility' => true,
                ),
            ),
            'totop_border_radius' => array(
                'title' 			=> esc_html__( 'Button radius, px', 'healtro' ),
                'section' 			=> 'totop_section',
                'priority'          => 60,
                'default' 			=> 30,
                'field' 			=> 'number',
                'input_attrs' 		=> array(
                    'min'  => 0,
                    'max'  => 30,
                    'step' => 1,
                ),
                'type' 				=> 'control',
                'dynamic_css' 		=> true,
                'conditions' 		=> array(
                    'totop_visibility' => true,
                ),
            ),

            /** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'webion' ),
				'description' => esc_html__( 'Configure Color Scheme', 'webion' ),
				'priority'    => 40,
				'type'        => 'section',
			),

			'accent_color' => array(
				'title' 			=> esc_html__( 'Accent color', 'webion' ),
				'section' 			=> 'color_scheme',
				'default' 			=> '#3b3d42',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
			),
			'primary_text_color' => array(
				'title' 			=> esc_html__( 'Primary Text color', 'webion' ),
				'section' 			=> 'color_scheme',
				'default' 			=> '#3D3D3D',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
			),
			'secondary_text_color' => array(
				'title' 			=> esc_html__( 'Secondary Text color', 'webion' ),
				'section' 			=> 'color_scheme',
				'default' 			=> '#A0A0A0',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
			),
			'link_color' => array(
				'title' 			=> esc_html__( 'Link color', 'webion' ),
				'section' 			=> 'color_scheme',
				'default' 			=> '#6F6F6F',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
			),
			'link_hover_color' => array(
				'title' 			=> esc_html__( 'Link hover color', 'webion' ),
				'section' 			=> 'color_scheme',
				'default' 			=> '#3b3d42',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
			),
			'h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'grey_color_1' => array(
				'title'   => esc_html__( 'Grey color (1)', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#d8d8d8', // new !
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Invert Text color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'btn_text_color' => array(
				'title'   => esc_html__( 'Button Text Color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#1B1B1B',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
            'btn_text_hover_color' => array(
                'title'   => esc_html__( 'Button Text Hover Color', 'webion' ),
                'section' => 'color_scheme',
                'default' => '#ffffff',
                'field'   => 'hex_color',
                'type'    => 'control',
            ),
			'btn_bg_color' => array(
				'title'   => esc_html__( 'Button Background Color', 'webion' ),
				'section' => 'color_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
            'btn_bg_hover_color' => array(
                'title'   => esc_html__( 'Button Background Hover Color', 'webion' ),
                'section' => 'color_scheme',
                'default' => '#1B1B1B',
                'field'   => 'hex_color',
                'type'    => 'control',
            ),
            'btn_border_color' => array(
                'title'   => esc_html__( 'Button Border Color', 'webion' ),
                'section' => 'color_scheme',
                'default' => '#1B1B1B',
                'field'   => 'hex_color',
                'type'    => 'control',
            ),
            'btn_border_hover_color' => array(
                'title'   => esc_html__( 'Button Border Hover Color', 'webion' ),
                'section' => 'color_scheme',
                'default' => '#1B1B1B',
                'field'   => 'hex_color',
                'type'    => 'control',
            ),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'webion' ),
				'description' => esc_html__( 'Configure typography settings', 'webion' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body Text', 'webion' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'webion' ),
				'section' => 'body_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'body_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'body_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'body_typography',
				'default'     => '1.67',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),			
			'body_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'body_typography',
				'default' => 'none',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'       => esc_html__( 'H1 Heading', 'webion' ),
				'priority'    => 10,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'webion' ),
				'section' => 'h1_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'h1_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'h1_typography',
				'default'     => '40',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'h1_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'h1_typography',
				'default'     => '0.27',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),
			'h1_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'h1_typography',
				'default' => 'none',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'       => esc_html__( 'H2 Heading', 'webion' ),
				'priority'    => 15,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'webion' ),
				'section' => 'h2_typography',
				'default' => 'Oswald, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'h2_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'h2_typography',
				'default'     => '36',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title' 			=> esc_html__( 'Line Height', 'webion' ),
				'description' 		=> esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section' 			=> 'h2_typography',
				'default' 			=> '1.47',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' 				=> 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'h2_typography',
				'default'     => '7',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),
			'h2_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'h2_typography',
				'default' => 'uppercase',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'       => esc_html__( 'H3 Heading', 'webion' ),
				'priority'    => 20,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h3_font_family' => array(
				'title' 			=> esc_html__( 'Font Family', 'webion' ),
				'section' 			=> 'h3_typography',
				'default' 			=> 'Hind, sans-serif',
				'field' 			=> 'fonts',
				'type' 				=> 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'h3_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'h3_typography',
				'default'     => '26',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'h3_typography',
				'default'     => '1.38',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),
			'h3_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'h3_typography',
				'default' => 'none',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'       => esc_html__( 'H4 Heading', 'webion' ),
				'priority'    => 25,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'webion' ),
				'section' => 'h4_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'h4_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'h4_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'h4_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),
			'h4_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'h4_typography',
				'default' => 'none',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'       => esc_html__( 'H5 Heading', 'webion' ),
				'priority'    => 30,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'webion' ),
				'section' => 'h5_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'h5_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'h5_typography',
				'default'     => '21',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'h5_typography',
				'default'     => '1.71',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),
			'h5_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'h5_typography',
				'default' => 'none',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'       => esc_html__( 'H6 Heading', 'webion' ),
				'priority'    => 35,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'webion' ),
				'section' => 'h6_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'webion' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => webion_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' => 'h6_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => webion_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'webion' ),
				'section'     => 'h6_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'h6_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'webion' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => webion_get_text_aligns(),
				'type'    => 'control',
			),
			'h6_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'h6_typography',
				'default' => 'none',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),

			/** `Logo text` section */
			'logo_typography' => array(
				'title'       => esc_html__( 'Logo Text', 'webion' ),
				'priority'    => 40,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'webion' ),
				'section'         => 'logo_typography',
				'default'         => 'Hind, serif-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'webion' ),
				'section'         => 'logo_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => webion_get_font_styles(),
				'type'            => 'control',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'webion' ),
				'description'     => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section'         => 'logo_typography',
				'default'         => '400',
				'field'           => 'select',
				'choices'         => webion_get_font_weight(),
				'type'            => 'control',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'webion' ),
				'section'         => 'logo_typography',
				'default'         => '30',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'webion' ),
				'section'         => 'logo_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => webion_get_character_sets(),
				'type'            => 'control',
			),

			/** `Menu` section */
			'menu_typography' => array(
				'title'       => esc_html__( 'Menu', 'webion' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'menu_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'webion' ),
				'section'         => 'menu_typography',
				'default'         => 'Montserrat, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'menu_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'webion' ),
				'section'         => 'menu_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => webion_get_font_styles(),
				'type'            => 'control',
			),
			'menu_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section'         => 'menu_typography',
				'default'         => '300',
				'field'           => 'select',
				'choices'         => webion_get_font_weight(),
				'type'            => 'control',
			),
			'menu_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'webion' ),
				'section'         => 'menu_typography',
				'default'         => '11',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'menu_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'menu_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'menu_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'webion' ),
				'section'     => 'menu_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'menu_character_set' => array(
				'title' 			=> esc_html__( 'Character Set', 'webion' ),
				'section' 			=> 'menu_typography',
				'default' 			=> 'latin',
				'field' 			=> 'select',
				'choices' 			=> webion_get_character_sets(),
				'type' 				=> 'control',
			),
			'menu_text_transform' => array(
				'title' 			=> esc_html__( 'Text Transform', 'webion' ),
				'section' 			=> 'menu_typography',
				'default' 			=> 'uppercase',
				'field' 			=> 'select',
				'choices' 			=> webion_get_text_transform(),
				'type' 				=> 'control',
			),

			/** `Meta` section */
			'meta_typography' => array(
				'title'       => esc_html__( 'Meta', 'webion' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'meta_font_family' => array(
				'title' 			=> esc_html__( 'Font Family', 'webion' ),
				'section' 			=> 'meta_typography',
				'default' 			=> 'Hind, sans-serif',
				'field' 			=> 'fonts',
				'type' 				=> 'control',
			),
			'meta_font_style' => array(
				'title' 			=> esc_html__( 'Font Style', 'webion' ),
				'section' 			=> 'meta_typography',
				'default' 			=> 'normal',
				'field' 			=> 'select',
				'choices' 			=> webion_get_font_styles(),
				'type' 				=> 'control',
			),
			'meta_font_weight' => array(
				'title' 			=> esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' 			=> 'meta_typography',
				'default' 			=> '300',
				'field' 			=> 'select',
				'choices' 			=> webion_get_font_weight(),
				'type' 				=> 'control',
			),
			'meta_font_size' => array(
				'title' 			=> esc_html__( 'Font Size, px', 'webion' ),
				'section' 			=> 'meta_typography',
				'default' 			=> '10',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' 				=> 'control',
			),
			'meta_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'webion' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section'     => 'meta_typography',
				'default'     => '2.7',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'meta_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'webion' ),
				'section'     => 'meta_typography',
				'default'     => '0.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'meta_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'webion' ),
				'section' => 'meta_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => webion_get_character_sets(),
				'type'    => 'control',
			),
			'meta_text_transform' => array(
				'title'   => esc_html__( 'Text Transform', 'webion' ),
				'section' => 'meta_typography',
				'default' => 'uppercase',
				'field'   => 'select',
				'choices' => webion_get_text_transform(),
				'type'    => 'control',
			),
			
			/** `Button` section */
			'button_typography' => array(
				'title' 			=> esc_html__( 'Button', 'webion' ),
				'priority' 			=> 55,
				'panel' 			=> 'typography',
				'type' 				=> 'section',
			),
			'button_font_family' => array(
				'title' 			=> esc_html__( 'Font Family', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> 'Hind, sans-serif',
				'field' 			=> 'fonts',
				'type' 				=> 'control',
			),
			'button_font_style' => array(
				'title' 			=> esc_html__( 'Font Style', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> 'normal',
				'field' 			=> 'select',
				'choices' 			=> webion_get_font_styles(),
				'type' 				=> 'control',
			),
			'button_font_weight' => array(
				'title' 			=> esc_html__( 'Font Weight', 'webion' ),
				'description' => esc_html__( 'Important: Not all fonts support every font-weight.', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> '400',
				'field' 			=> 'select',
				'choices' 			=> webion_get_font_weight(),
				'type' 				=> 'control',
			),
			'button_text_transform' => array(
				'title' 			=> esc_html__( 'Text Transform', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> 'uppercase',
				'field' 			=> 'select',
				'choices' 			=> webion_get_text_transform(),
				'type' 				=> 'control',
			),
			'button_font_size' => array(
				'title' 			=> esc_html__( 'Font Size, px', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> '16',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' 				=> 'control',
			),
			'button_line_height' => array(
				'title' 			=> esc_html__( 'Line Height', 'webion' ),
				'description' 		=> esc_html__( 'Relative to the font-size of the element', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> '1',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' 				=> 'control',
			),
			'button_letter_spacing' => array(
				'title' 			=> esc_html__( 'Letter Spacing, px', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> '0',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' 				=> 'control',
			),
			'button_character_set' => array(
				'title' 			=> esc_html__( 'Character Set', 'webion' ),
				'section' 			=> 'button_typography',
				'default' 			=> 'latin',
				'field' 			=> 'select',
				'choices' 			=> webion_get_character_sets(),
				'type' 				=> 'control',
			),

			/** `Header` panel */
			'header_panel' => array(
				'title' 			=> esc_html__( 'Header', 'webion' ),
				'priority' 			=> 105,
				'type' 				=> 'panel',
			),

			'header_styles' => array(
				'title' 			=> esc_html__( 'Style', 'webion' ),
				'panel' 			=> 'header_panel',
				'type' 				=> 'section',
			),
			'header_layout_type' => array(
				'title' 			=> esc_html__( 'Layout', 'webion' ),
				'section' 			=> 'header_styles',
				'default' 			=> 'style-3',
				'choices' 			=> array(
					'style-1' => esc_html__( 'Style 1 (Logo by Center)', 'webion' ),
					// 'style-2' => esc_html__( 'Style 2 (Hamburger Menu)', 'webion' ),
					'style-3' => esc_html__( 'Style 2 (Logo by Left)', 'webion' ),
				),
				'field' 			=> 'select',
				'type' 				=> 'control',
			),
			'header_container_type' => array(
				'title' 			=> esc_html__( 'Container Type', 'webion' ),
				'section' 			=> 'header_styles',
				'default' 			=> 'fullwidth',
				'field' 			=> 'select',
				'choices' 			=> array(
					'boxed'     => esc_html__( 'Boxed', 'webion' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'webion' ),
				),
				'type' 				=> 'control',
			),
			'header_social_links' => array(
				'title' 			=> esc_html__( 'Show Social Links', 'webion' ),
				'section' 			=> 'header_styles',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),

			'header_search_section' => array(
				'title' 			=> esc_html__( 'Search Popup', 'webion' ),
				'panel' 			=> 'header_panel',
				'type' 				=> 'section',
			),
			'header_search_visible' => array(
				'title' 			=> esc_html__( 'Show Search', 'webion' ),
				'section' 			=> 'header_search_section',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'header_search_placeholder' => array(
				'title' 			=> esc_html__( 'Placeholder Text', 'webion' ),
				'section' 			=> 'header_search_section',
				'default' 			=> esc_html__( 'Enter keyword', 'webion' ),
				'field' 			=> 'text',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'header_search_visible' 	=> true,
				),
			),

			/** `Footer` panel */
			'footer_options' => array(
				'title' 			=> esc_html__( 'Footer', 'webion' ),
				'priority' 			=> 110,
				'type' 				=> 'section',
			),
			'footer_bg' => array(
				'title' 			=> esc_html__( 'Background Color', 'webion' ),
				'section' 			=> 'footer_options',
				'default' 			=> '#f2f2f2',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
				'dynamic_css' 		=> true,
			),
			'footer_text_color' => array(
				'title' 			=> esc_html__( 'Text Color', 'webion' ),
				'section' 			=> 'footer_options',
				'default' 			=> '#595959',
				'field' 			=> 'hex_color',
				'type' 				=> 'control',
				'dynamic_css' 		=> true,
			),
			'footer_copyright' => array(
				'title' 			=> esc_html__( 'Copyright text', 'webion' ),
				'section' 			=> 'footer_options',
				'default' 			=> webion_get_default_footer_copyright(),
				'field' 			=> 'textarea',
				'type' 				=> 'control',
			),
			'footer_menu_visible' => array(
				'title'   => esc_html__( 'Show Footer Menu', 'webion' ),
				'section' => 'footer_bar',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_logo_visible' => array(
				'title' 			=> esc_html__( 'Show Footer Logo', 'webion' ),
				'section' 			=> 'footer_options',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'footer_logo' => array(
				'title' 			=> esc_html__( 'Footer Logo', 'webion' ),
				'section' 			=> 'footer_options',
				'field' 			=> 'image',
				'type' 				=> 'control',
				'dynamic_css' 		=> true,
				'conditions'   => array(
					'footer_logo_visible' => true,
				),
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title' 			=> esc_html__( 'Blog Settings', 'webion' ),
				'priority' 			=> 115,
				'type' 				=> 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title' 			=> esc_html__( 'Blog', 'webion' ),
				'panel' 			=> 'blog_settings',
				'priority' 			=> 10,
				'type' 				=> 'section',
			),

			/* Blog Page Title */
			'blog_page_title' => array(
				'title' 			=> esc_html__( 'Show Blog Page Title', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),

			'blog_layout_columns' => array(
				'title' 			=> esc_html__( 'Columns', 'webion' ),
				'section' 			=> 'blog',
				'default'			=> '2-cols',
				'field' 			=> 'select',
				'choices' 			=> array(
					'2-cols' => esc_html__( '2 columns', 'webion' ),
					'3-cols' => esc_html__( '3 columns', 'webion' ),
				),
				'type' 				=> 'control',
				'active_callback' 	=> 'webion_is_blog_columns_enabled',
			),
			'blog_sidebar_position' => array(
				'title' 			=> esc_html__( 'Sidebar', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> 'one-right-sidebar',
				'field' 			=> 'select',
				'choices' 			=> array(
					'one-left-sidebar' 	=> esc_html__( 'Sidebar on left side', 'webion' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'webion' ),
					'none' 				=> esc_html__( 'No sidebar', 'webion' ),
				),
				'type' 				=> 'control',
				'active_callback' 	=> 'webion_is_blog_sidebar_enabled',
			),
			'blog_sticky_type' => array(
				'title' 			=> esc_html__( 'Sticky label type', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> 'icon',
				'field' 			=> 'select',
				'choices' 			=> array(
					'label' => esc_html__( 'Text Label', 'webion' ),
					'icon'  => esc_html__( 'Font Icon', 'webion' ),
					'both'  => esc_html__( 'Text with Icon', 'webion' ),
				),
				'type' 				=> 'control',
			),
			'blog_sticky_label' => array(
				'description' 		=> esc_html__( 'Label for sticky post', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> esc_html__( 'Featured', 'webion' ),
				'field' 			=> 'text',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'blog_sticky_type' => array( 'label', 'both' ),
				),
			),
			'blog_post_author' => array(
				'title' 			=> esc_html__( 'Show post author', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_post_author_avatar' => array(
				'title' 			=> esc_html__( 'Show post author avatar', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_post_publish_date' => array(
				'title' 			=> esc_html__( 'Show publish date', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_post_categories' => array(
				'title' 			=> esc_html__( 'Show categories', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_post_tags' => array(
				'title' 			=> esc_html__( 'Show tags', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_post_comments' => array(
				'title' 			=> esc_html__( 'Show comments', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_post_excerpt' => array(
				'title' 			=> esc_html__( 'Show Excerpt', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control'
			),
			'blog_post_excerpt_words_count' => array(
				'title' 			=> esc_html__( 'Excerpt Words Count', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> '15',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type' 				=> 'control',
			),
			'blog_read_more_type' => array(
				'title' 			=> esc_html__( 'Read more button type', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'blog_read_more_text' => array(
				'title' 			=> esc_html__( 'Read more button text', 'webion' ),
				'section' 			=> 'blog',
				'default' 			=> esc_html__( 'Read more', 'webion' ),
				'field' 			=> 'text',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'blog_read_more_type' => true,
				)
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'webion' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar', 'webion' ),
				'section' => 'blog_post',
				'default' => 'none',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'webion' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'webion' ),
					'none'              => esc_html__( 'No sidebar', 'webion' ),
				),
				'type' => 'control',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'webion' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'webion' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'webion' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'webion' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'webion' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_networks' => array(
				'title'   => esc_html__( 'Share Networks', 'webion' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_navigation' => array(
				'title'   => esc_html__( 'Enable post navigation', 'webion' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Author Bio` section */
			'post_authorbio' => array(
				'title' 			=> esc_html__( 'Author Bio Block', 'webion' ),
				'panel' 			=> 'blog_settings',
				'priority' 			=> 25,
				'type' 				=> 'section',
				'active_callback' 	=> 'callback_single',
			),
			'post_authorbio_block' => array(
				'title' 			=> esc_html__( 'Show Author Bio Block', 'webion' ),
				'section' 			=> 'post_authorbio',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),

			/** `Related Posts` section */
			'related_posts' => array(
				'title' 			=> esc_html__( 'Related Posts Block', 'webion' ),
				'panel' 			=> 'blog_settings',
				'priority' 			=> 30,
				'type' 				=> 'section',
				'active_callback' 	=> 'callback_single',
			),
			'related_posts_visible' => array(
				'title' 			=> esc_html__( 'Show related posts block', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
			),
			'related_posts_block_title' => array(
				'title' 			=> esc_html__( 'Related posts block title', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> esc_html__( 'You Might Also Like', 'webion' ),
				'field' 			=> 'text',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
			'related_posts_count' => array(
				'title' 			=> esc_html__( 'Number of post', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> '3',
				'field' 			=> 'text',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),

			'related_posts_image' => array(
				'title' 			=> esc_html__( 'Show post image', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
			'related_posts_title' => array(
				'title' 			=> esc_html__( 'Show post title', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
			'related_posts_excerpt' => array(
				'title' 			=> esc_html__( 'Display excerpt', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
			'related_posts_excerpt_words_count' => array(
				'title' 			=> esc_html__( 'Excerpt Words Count', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> '15',
				'field' 			=> 'number',
				'input_attrs' 		=> array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
					'related_posts_excerpt' => true,
				),
			),
			'related_posts_author' => array(
				'title' 			=> esc_html__( 'Show post author', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> false,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
			'related_posts_publish_date' => array(
				'title' 			=> esc_html__( 'Show post publish date', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
			'related_posts_comment_count' => array(
				'title' 			=> esc_html__( 'Show post comment count', 'webion' ),
				'section' 			=> 'related_posts',
				'default' 			=> true,
				'field' 			=> 'checkbox',
				'type' 				=> 'control',
				'conditions' 		=> array(
					'related_posts_visible' => true,
				),
			),
	) ) );
}

/**
 * Return true if value of passed setting is not equal with passed value.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function webion_is_not_setting( $control, $setting, $value ) {

	if ( $value !== $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;

}

/**
 * Move native `site_icon` control (based on WordPress core) into custom section.
 *
 * @since 1.0.0
 * @param  object $wp_customize
 * @return void
 */
function webion_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'webion_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'webion' );
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'webion_customizer_change_core_controls', 20 );

/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_font_styles() {
	return apply_filters( 'webion-theme/font/styles', array(
		'normal'  => esc_html__( 'Normal', 'webion' ),
		'italic'  => esc_html__( 'Italic', 'webion' ),
		'oblique' => esc_html__( 'Oblique', 'webion' ),
		'inherit' => esc_html__( 'Inherit', 'webion' ),
	) );
}

/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_character_sets() {
	return apply_filters( 'webion-theme/font/character_sets', array(
		'latin'        => esc_html__( 'Latin', 'webion' ),
		'greek'        => esc_html__( 'Greek', 'webion' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'webion' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'webion' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'webion' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'webion' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'webion' ),
	) );
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_text_aligns() {
	return apply_filters( 'webion-theme/font/text-aligns', array(
		'inherit' => esc_html__( 'Inherit', 'webion' ),
		'center'  => esc_html__( 'Center', 'webion' ),
		'justify' => esc_html__( 'Justify', 'webion' ),
		'left'    => esc_html__( 'Left', 'webion' ),
		'right'   => esc_html__( 'Right', 'webion' ),
	) );
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_font_weight() {
	return apply_filters( 'webion-theme/font/weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

/**
 * Get text transform.
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_text_transform() {
	return apply_filters( 'webion_get_text_transform', array(
		'none'       => esc_html__( 'None ', 'webion' ),
		'uppercase'  => esc_html__( 'Uppercase ', 'webion' ),
		'lowercase'  => esc_html__( 'Lowercase', 'webion' ),
		'capitalize' => esc_html__( 'Capitalize', 'webion' ),
	) );
}

// Background utility function
/**
 * Get background position
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_bg_position() {
	return apply_filters( 'webion_get_bg_position', array(
		'top-left'      => esc_html__( 'Top Left', 'webion' ),
		'top-center'    => esc_html__( 'Top Center', 'webion' ),
		'top-right'     => esc_html__( 'Top Right', 'webion' ),
		'center-left'   => esc_html__( 'Middle Left', 'webion' ),
		'center'        => esc_html__( 'Middle Center', 'webion' ),
		'center-right'  => esc_html__( 'Middle Right', 'webion' ),
		'bottom-left'   => esc_html__( 'Bottom Left', 'webion' ),
		'bottom-center' => esc_html__( 'Bottom Center', 'webion' ),
		'bottom-right'  => esc_html__( 'Bottom Right', 'webion' ),
	) );
}

/**
 * Get background size
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_bg_size() {
	return apply_filters( 'webion_get_bg_size', array(
		'auto'    => esc_html__( 'Auto', 'webion' ),
		'cover'   => esc_html__( 'Cover', 'webion' ),
		'contain' => esc_html__( 'Contain', 'webion' ),
	) );
}

/**
 * Get background repeat
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_bg_repeat() {
	return apply_filters( 'webion_get_bg_repeat', array(
		'no-repeat' => esc_html__( 'No Repeat', 'webion' ),
		'repeat'    => esc_html__( 'Tile', 'webion' ),
		'repeat-x'  => esc_html__( 'Tile Horizontally', 'webion' ),
		'repeat-y'  => esc_html__( 'Tile Vertically', 'webion' ),
	) );
}

/**
 * Get background attachment
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_bg_attachment() {
	return apply_filters( 'webion_get_bg_attachment', array(
		'scroll' => esc_html__( 'Scroll', 'webion' ),
		'fixed'  => esc_html__( 'Fixed', 'webion' ),
	) );
}

/**
 * Get text color
 *
 * @since 1.0.0
 * @return array
 */
function webion_get_text_color() {
	return apply_filters( 'webion_get_text_color', array(
		'light' => esc_html__( 'Light', 'webion' ),
		'dark'  => esc_html__( 'Dark', 'webion' ),
	) );
}


/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */

function webion_get_dynamic_css_options() {
	return apply_filters( 'webion-theme/dynamic_css/options', array(
		'prefix'        => 'webion',
		'type'          => 'theme_mod',
		'parent_handles' => array(
			'css' => 'webion-theme-style',
			'js'  => 'webion-theme-js',
		),
		'css_files'      => array(
			get_theme_file_path( 'assets/css/dynamic.css' ),
			get_theme_file_path( 'assets/css/dynamic/header.css' ),
			get_theme_file_path( 'assets/css/dynamic/footer.css' ),
			get_theme_file_path( 'assets/css/dynamic/menus.css' ),
			get_theme_file_path( 'assets/css/dynamic/social.css' ),
			get_theme_file_path( 'assets/css/dynamic/navigation.css' ),
			get_theme_file_path( 'assets/css/dynamic/buttons.css' ),
			get_theme_file_path( 'assets/css/dynamic/forms.css' ),
			get_theme_file_path( 'assets/css/dynamic/post.css' ),
			get_theme_file_path( 'assets/css/dynamic/page.css' ),
			get_theme_file_path( 'assets/css/dynamic/post-grid.css' ),
			get_theme_file_path( 'assets/css/dynamic/widgets.css' ),
			get_theme_file_path( 'assets/css/dynamic/plugins.css' ),
		),
		'options_cb'     => 'get_theme_mods',
	) );
}

/**
 * Return true if setting is value. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function webion_is_setting( $control, $setting, $value ) {

	if ( $value == $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function webion_get_default_footer_copyright() {
	return esc_html__( '%%site-name%% © %%year%%. All rights reserved.', 'webion' );
}

/**
 * Return true if blog sidebar enabled.
 *
 * @return bool
 */
function webion_is_blog_sidebar_enabled() {
	return apply_filters( 'webion-theme/customizer/blog-sidebar-enabled', true );
}

/**
 * Return true if blog columns enabled.
 *
 * @return bool
 */
function webion_is_blog_columns_enabled() {
	return apply_filters( 'webion-theme/customizer/blog-columns-enabled', true );
}

/**
 * Load dynamic logic for the customizer controls area.
 *
 * @since 1.0.0
 */
function webion_customize_controls_assets() {
	wp_enqueue_script( 'webion-theme-customizer-controls', get_theme_file_uri('assets/js/customizer-controls.js' ), array( 'customize-controls' ), webion_theme()->version, true );

	wp_localize_script( 'webion-theme-customizer-controls', 'webionControlsConditions', webion_get_customize_controls_conditions() );
}

add_action( 'customize_controls_enqueue_scripts', 'webion_customize_controls_assets' );

/**
 * Get customize controls conditions.
 *
 * @since  1.0.0
 * @return array
 */
function webion_get_customize_controls_conditions() {

	$customize_options = webion_get_customizer_options();
	$controls_args     = $customize_options['options'];

	$results = array();

	foreach ( $controls_args as $control => $args ) {
		if ( isset( $args['conditions'] ) ) {
			$results[ $control ] = $args['conditions'];
		}
	}

	return $results;
}