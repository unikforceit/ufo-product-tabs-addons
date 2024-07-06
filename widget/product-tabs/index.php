<?php
namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ufo_product_tabs_addons extends Widget_Base
{

    public function get_name()
    {
        return 'ufo-product_tabs-addons';
    }

    public function get_title()
    {
        return __('UFO Product Tabs', 'ufo');
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_icon()
    {
        return 'eicon-posts-group';
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'tb_heading_section',
            [
                'label' => __('Tab Heading', 'ufo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tab_sub_heading1',
            [
                'label' => esc_html__('Tab Sub Heading 1', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('1', 'ufo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tab_heading1',
            [
                'label' => esc_html__('Tab Heading 1', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Here is the product', 'ufo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tab_sub_heading2',
            [
                'label' => esc_html__('Tab Sub Heading 2', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('2', 'ufo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tab_heading2',
            [
                'label' => esc_html__('Tab Heading 2', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Here is the pack', 'ufo'),
                'label_block' => true,
            ]
        );
        $this->start_controls_tabs(
            'style_tb_heading_section'
        );

        $this->start_controls_tab(
            'style_normal_tb_heading_section',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );
        $this->add_control(
            'tbhd_colorv',
            [
                'label' => __('Title Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'thbd_typographyh',
                'label' => __('Title Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading',
            ]
        );
        $this->add_control(
            'tbhdn_colorv',
            [
                'label' => __('Number Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_sub_heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbhdnb_colorv',
            [
                'label' => __('Number BG Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_sub_heading' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'thbdn_typographyh',
                'label' => __('Number Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab_sub_heading',
            ]
        );
        $this->add_responsive_control(
            'tbhd_padding',
            [
                'label' => esc_html__('Padding', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'tbhd_margin',
            [
                'label' => esc_html__('Margin', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbhd_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading',
            ]
        );
        $this->add_responsive_control(
            'tbhd_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbhd_bg',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'style_hover_tab_heading_hover',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );

        $this->add_control(
            'tbhdh_colorv',
            [
                'label' => __('Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbhdh_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading:hover',
            ]
        );
        $this->add_responsive_control(
            'tbhdh_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbhdh_bg',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab_heading:hover',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Tabs Button', 'ufo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'tab_id',
            [
                'label' => esc_html__('ID', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('1', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_title',
            [
                'label' => esc_html__('Title', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Essential', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'discount',
            [
                'label' => esc_html__('Discount', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('14%', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_r_price',
            [
                'label' => esc_html__('Regular Price', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('39,90€', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_s_price',
            [
                'label' => esc_html__('Sale Price', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('159,90€ ', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_image',
            [
                'label' => esc_html__('Image', 'ufo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'tabs_button',
            [
                'label' => esc_html__('Tab Button', 'ufo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_title' => esc_html__('Essential', 'ufo'),
                    ],
                    [
                        'tab_title' => esc_html__('Comfort', 'ufo'),
                    ],
                    [
                        'tab_title' => esc_html__('Expert', 'ufo'),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tabs_content_section',
            [
                'label' => __('Tabs Content', 'ufo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater2 = new Repeater();
        $repeater2->add_control(
            'content_id',
            [
                'label' => esc_html__('ID', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('1', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater2->add_control(
            'content_title',
            [
                'label' => esc_html__('Title', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Essential', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater2->add_control(
            'content_r_price',
            [
                'label' => esc_html__('Regular Price', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('87,90€', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater2->add_control(
            'content_s_price',
            [
                'label' => esc_html__('Sale Price', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('29,90€ ', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater2->add_control(
            'content_sv_price',
            [
                'label' => esc_html__('Save Price', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('18€ ', 'ufo'),
                'label_block' => true,
            ]
        );
        $repeater2->add_control(
            'content_link',
            [
                'label' => esc_html__('Link', 'ufo'),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );
        $repeater2->add_control(
            'free_shipping',
            [
                'label' => esc_html__('Free Shipping', 'ufo'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => __('Includes <strong>FREE</strong> shipping', 'ufo'),
            ]
        );
        $repeater2->add_control(
            'content_image',
            [
                'label' => esc_html__('Image', 'ufo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater2->add_control(
            'free_item',
            [
                'label' => esc_html__('Free Item', 'ufo'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'ufo'),
                'label_off' => esc_html__('Hide', 'ufo'),
                'return_value' => 'active',
                'default' => '',
            ]
        );
        $repeater2->add_control(
            'free_item_title',
            [
                'label' => esc_html__('Free Title', 'ufo'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => __('<strong>+ FREE</strong> Body scrub for silky & shiny skin ', 'ufo'),
                'condition' => [
                    'free_item' => 'active',
                ],
            ]
        );
        $repeater2->add_control(
            'free_item_image',
            [
                'label' => esc_html__('Free Image', 'ufo'),
                'type' => Controls_Manager::MEDIA,
                'condition' => [
                    'free_item' => 'active',
                ],
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'tabs_content',
            [
                'label' => esc_html__('Tab Content', 'ufo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'content_title' => esc_html__('1 Pack', 'ufo'),
                    ],
                    [
                        'content_title' => esc_html__('2 Pack', 'ufo'),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'buy_button_section',
            [
                'label' => __('Buy Button', 'ufo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button', 'ufo'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Buy Now ', 'ufo'),
                'label_block' => true,
            ]
        );
        $this->start_controls_tabs(
            'style_btn'
        );

        $this->start_controls_tab(
            'style_normal_btn',
            [
                'label' => esc_html__('Button Normal', 'textdomain'),
            ]
        );
        $this->add_control(
            'btn_colorv',
            [
                'label' => __('Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ttttypographyh',
                'label' => __('Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy',
            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => esc_html__('Padding', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy',
            ]
        );
        $this->add_responsive_control(
            'btn_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'style_hover_btn',
            [
                'label' => esc_html__('Button Hover', 'textdomain'),
            ]
        );

        $this->add_control(
            'btn_colorh',
            [
                'label' => __('Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_h',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy:hover',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border_h',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .bundle-buy:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'product_tabs_section_style',
            [
                'label' => __('Tab Button', 'ufo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'style_tabsav'
        );

        $this->start_controls_tab(
            'style_normal_tbtn',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );
        $this->add_responsive_control(
            'tb_image',
            [
                'label' => esc_html__('Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tb_image_border',
                'label' => __('Image Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button img',
            ]
        );
        $this->add_responsive_control(
            'tb_image_border_radius',
            [
                'label' => esc_html__('Image Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'tb_badge',
            [
                'label' => __('Badge Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .discount-badge' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tb_badge_bg',
            [
                'label' => __('Badge BG Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .discount-badge' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tb_badge_typo',
                'label' => __('Badge Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .discount-badge',
            ]
        );
        $this->add_control(
            'tb_title',
            [
                'label' => __('Title Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tb_title_typo',
                'label' => __('Title Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .title',
            ]
        );
        $this->add_control(
            'tb_sale_price',
            [
                'label' => __('Sale Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tb_sale_price_typo',
                'label' => __('Sale Price Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .price',
            ]
        );
        $this->add_control(
            'tb_reg_price',
            [
                'label' => __('Regular Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .original-price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tb_reg_price_typo',
                'label' => __('Regular Price Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button .original-price',
            ]
        );
        $this->add_responsive_control(
            'tb_pdding',
            [
                'label' => esc_html__('Padding', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'tb_gap',
            [
                'label' => esc_html__('Gap', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-buttons' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'tb_margin',
            [
                'label' => esc_html__('Margin', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tb_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'tb_shadow',
                'label' => __('Shadow', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button',
            ]
        );
        $this->add_responsive_control(
            'tb_border_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tb_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'style_hover_tabav',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );

        $this->add_control(
            'tbh_badge',
            [
                'label' => __('Badge Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover .discount-badge, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active .discount-badge' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbh_title',
            [
                'label' => __('Title Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover .title, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbh_sale_price',
            [
                'label' => __('Sale Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover .price, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active .price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbh_reg_price',
            [
                'label' => __('Regular Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover .original-price, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active .original-price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'tbh_border_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbh_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'tbh_shadow',
                'label' => __('Shadow', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbh_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-button.active',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tboverlay_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-button::after',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background Overlay', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'product_tabs_content_section_style',
            [
                'label' => __('Tab Content', 'ufo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'style_tabscn'
        );

        $this->start_controls_tab(
            'style_normal_tbcn',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );
        $this->add_responsive_control(
            'tbn_image',
            [
                'label' => esc_html__('Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .product-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbn_image_border',
                'label' => __('Image Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .product-image img',
            ]
        );
        $this->add_responsive_control(
            'tbn_image_border_radius',
            [
                'label' => esc_html__('Image Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .product-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'tbn_saving',
            [
                'label' => __('Saving Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .savings' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnbg_saving',
            [
                'label' => __('Saving BG Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .savings' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tbn_saving_typo',
                'label' => __('Saving Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .savings',
            ]
        );
        $this->add_control(
            'tbn_title',
            [
                'label' => __('Title Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product p.pack_title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tbn_title_typo',
                'label' => __('Title Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product p.pack_title',
            ]
        );
        $this->add_control(
            'tbn_free_text',
            [
                'label' => __('Free Text Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .free-ship-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tbn_free_text_typo',
                'label' => __('Free Text Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .free-ship-text',
            ]
        );
        $this->add_control(
            'tbn_sale_price',
            [
                'label' => __('Sale Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .sale_price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tbn_sale_price_typo',
                'label' => __('Sale Price Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .sale_price',
            ]
        );
        $this->add_control(
            'tbn_reg_price',
            [
                'label' => __('Regular Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .original-price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tbn_reg_price_typo',
                'label' => __('Regular Price Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product .original-price',
            ]
        );
        $this->add_responsive_control(
            'tbn_margin',
            [
                'label' => esc_html__('Margin', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'tbn_pdding',
            [
                'label' => esc_html__('Padding', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbn_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label',
            ]
        );
        $this->add_responsive_control(
            'tbn_border_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'tbn_shadow',
                'label' => __('Shadow', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbn_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->add_control(
            'tbnf_check_color',
            [
                'label' => __('Check Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label::before' => 'box-shadow: 0 0 0 1px {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnf_color',
            [
                'label' => __('Free Bundle Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .free-item .free-item-wrap .free-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tbnf_typo',
                'label' => __('Free Bundle Typography', 'ufo'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .free-item .free-item-wrap .free-text',
            ]
        );
        $this->add_responsive_control(
            'tbfree_image',
            [
                'label' => esc_html__('Free Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .free-item .free-item-wrap .free-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbfree_image_border',
                'label' => __('Free Image Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .free-item .free-item-wrap .free-image img',
            ]
        );
        $this->add_responsive_control(
            'tbfree_image_border_radius',
            [
                'label' => esc_html__('Free Image Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .free-item .free-item-wrap .free-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbnf_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .free-item',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Free Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'style_hover_tabnav',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );

        $this->add_control(
            'tbnh_saving',
            [
                'label' => __('Saving Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover .savings, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label .savings' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnhbg_saving',
            [
                'label' => __('Saving BG Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover .savings, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label .savings' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnh_title',
            [
                'label' => __('Title Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover .pack_title, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label .pack_title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnfh_check_color',
            [
                'label' => __('Check Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product input[type=radio]:checked + label::before' => 'background: {{VALUE}}; outline:1px solid {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnh_free_text',
            [
                'label' => __('Free Text Hover Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover .free-ship-text, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label .free-ship-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnh_sale_price',
            [
                'label' => __('Sale Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover .sale_price, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label .sale_price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tbnh_reg_price',
            [
                'label' => __('Regular Price Color', 'ufo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover .original-price, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label .original-price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'tbnh_border_radius',
            [
                'label' => esc_html__('Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'tbnh_shadow',
                'label' => __('Shadow', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'tbnh_border',
                'label' => __('Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbnh_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label:hover, {{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active label',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbnfh_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product:hover .free-item ,{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product.active .free-item',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Free Background', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbnoverlay_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ufo-product-tab-wrapper .tab-content .product label::after',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Background Overlay', 'pixel-gallery'),
                    ],
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        include dirname(__FILE__) . '/layout.php';
    }

}

Plugin::instance()->widgets_manager->register(new ufo_product_tabs_addons());