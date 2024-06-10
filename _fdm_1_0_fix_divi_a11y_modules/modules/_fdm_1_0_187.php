<?php
if(!class_exists("ET_Builder_Module_DP_DMB_Module_187")){

    class ET_Builder_Module_DP_DMB_Module_187 extends ET_Builder_Module {        
        
        public $slug = "et_pb_dp_dmb_module_69ec2427";
         public $vb_support = "partial";    
        
        public function init() {
            $this->name = "FD Icon" ;
            
            
            $this->main_css_element = "%%order_class%%";
        }

        public function get_fields() {
            $fields = array(
                
                    "icon" => array(
                        "label" => __("Icon", "dp_dmb"),
                        "type" => "select_icon",    
                        "class" => array( "et-pb-font-icon" ),                        
                        "default" => "%%297%%",
                        "tab_slug" => "general",
                        "toggle_slug" => "content",
                        "description" => __("", "dp_dmb"),       
                    ),
                    "icon_icon_color" => array(
                        "label" => __("Icon Color", "dp_dmb"),
                        "type" => "color-alpha",
                        "custom_color" => true,
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                        "description" => __("Here you can define a custom color for your icon.", "dp_dmb"),
                    ),
                    "icon_use_circle" => array(
                        "label" => __("Icon Circle", "dp_dmb"),
                        "type" => "yes_no_button",
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "affects" => array(
                            "icon_use_circle_border",
                            "icon_circle_color",
                        ),
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                        "description" => __("Here you can choose whether icon should display within a circle.", "dp_dmb"),
                    ),
                    "icon_circle_color" => array(
                        "label" => __("Icon Circle Color", "dp_dmb"),
                        "type" => "color-alpha",
                        "custom_color" => true,
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                        "description" => __("Here you can define a custom color for the icon circle.", "dp_dmb"),
                    ),
                    "icon_use_circle_border" => array(
                        "label" => __("Icon Show Circle Border", "dp_dmb"),
                        "type" => "yes_no_button",
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "affects" => array(
                            "icon_circle_border_color",
                        ),
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                        "description" => __("Here you can choose whether the icon circle border should display.", "dp_dmb"),
                    ),
                    "icon_circle_border_color" => array(
                        "label" => __("Icon Border Color", "dp_dmb"),
                        "type" => "color-alpha",
                        "custom_color" => true,
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                        "description" => __("Here you can define a custom color for the icon circle border.", "dp_dmb"),
                    ),                        
                    "icon_use_icon_font_size" => array(
                        "label" => __("Icon Use Font Size", "dp_dmb"),
                        "type" => "yes_no_button",
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "affects" => array(
                            "icon_icon_font_size",
                        ),
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                    ),                       
                    "icon_icon_font_size" => array(
                        "label" => __("Icon Font Size", "dp_dmb"),
                        "type" => "range",
                        "option_category" => "font_option",
                        "default" => "96px",
                        "range_settings" => array(
                            "min" => "1",
                            "max" => "120",
                            "step" => "1",
                        ),
                        "mobile_options" => true,
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                    ),                                               
                    "icon_icon_font_size_last_edited" => array(     
                        "type" => "skip",                            
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                    ),                                              
                    "icon_icon_font_size_tablet" => array(     
                        "type" => "skip",                            
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                    ),                                              
                    "icon_icon_font_size_phone" => array(   
                        "type" => "skip",
                        "tab_slug" => "advanced",
                        "toggle_slug" => "icon",
                    ),
				"fdicon_new_tab" => array(
                        "label" => __( "FD Icon Open URL in New Tab", "dp_dmb" ),
                        "type" => "yes_no_button",
                        "description" => __( "Here you can choose whether or not your link opens in a new window", "dp_dmb" ),
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "content",
	),      
	"fdicon_url" => array(
                        "label" => __( "FD Icon URL", "dp_dmb" ),
                        "type" => "text",
                         
                        "description" => __( "Input the destination URL for your link.", "dp_dmb" ),
                        "tab_slug" => "general",
                        "toggle_slug" => "content",
	), 
                        "arialabel" => array(
                            "label" => __("Aria Label", "dp_dmb"),
                            "type" => "text",                         
                            "mobile_options" => false,   
                            "default" => __( "", "dp_dmb" ),
                            
                            "tab_slug" => "general",
                            "toggle_slug" => "content",
                            "description" => __("If you are linking the icon, provide an aria label for the link", "dp_dmb"),
                        ),
				"buttonid" => array(
                            "label" => __("Button ID", "dp_dmb"),
                            "type" => "text",                         
                            "mobile_options" => false,   
                            "default" => __( "", "dp_dmb" ),
                            
                            "tab_slug" => "general",
                            "toggle_slug" => "content",
                            "description" => __("If your link is #, enter a button id", "dp_dmb"),
                        ),
                 
            );
            return $fields;
        }
        
        public function get_settings_modal_toggles() {
            
        return array(
            "general" => array(
                "toggles" => array(
                    
                    "content" => esc_html__("Content", "dp_dmb"),
                    "background" => esc_html__("Background", "dp_dmb"),
                    "admin_label"  => esc_html__("Admin Label", "dp_dmb" ),
                    ),
                ),
                "advanced" => array(
                    "toggles" => array(
                        "icon" => esc_html__("Icons", "dp_dmb"),
                    ),
                ),
        );
        }
        
        public function get_advanced_fields_config() {
            return array(
                "background" => array("use_background_image" => true, "use_background_video" => true,),
                "text" => array("use_background_layout" => true, "options" => array("background_layout" => array("default" => "light",),), "css" => array("text_orientation"=> "%%order_class%%", "background_layout"=> "%%order_class%%")),
                "borders" => array("default" => array("css" => array("main" => "%%order_class%%",))),
                "box_shadow" => array("default" => array("css" => array("main" => "%%order_class%%",))),
                "button" => array(),
                "filters" => array(),
                "fonts" => array(),
                "margin_padding" => array(),
                "max_width" => array(),
                "animation" => array()
            );
        }
        
        public function get_custom_css_fields_config() {
            return array();
        }
        
        public function before_render(){
            /**/
             
			add_filter( "et_late_global_assets_list", array( $this, "require_divi_global_assets" ) );
             
       }

        public function render( $attrs, $content, $render_slug ) {
            $background_layout    = $this->props["background_layout"];
            $icon = $this->props["icon"]; $icon_icon_color = $this->props["icon_icon_color"]; $icon_use_circle = $this->props["icon_use_circle"]; $icon_circle_color = $this->props["icon_circle_color"]; $icon_use_circle_border = $this->props["icon_use_circle_border"]; $icon_circle_border_color = $this->props["icon_circle_border_color"]; $icon_use_icon_font_size = $this->props["icon_use_icon_font_size"]; $icon_icon_font_size = $this->props["icon_icon_font_size"]; $icon_icon_font_size_tablet = $this->props["icon_icon_font_size_tablet"]; $icon_icon_font_size_phone = $this->props["icon_icon_font_size_phone"]; $icon_icon_font_size_last_edited = $this->props["icon_icon_font_size_last_edited"]; $arialabel = $this->props["arialabel"]; 
			$buttonid = str_replace(' ','-',esc_attr($this->props["buttonid"]));
			$icon_icon_new_tab = $this->props["fdicon_new_tab"]; $icon_icon_url = $this->props["fdicon_url"]; $icon_icon_code = str_replace(';','', str_replace('&#x','', esc_attr(et_pb_process_font_icon($icon))));
                
            $this->add_classname( array(
                "et_pb_bg_layout_{$background_layout}",
                $this->get_text_orientation_classname(),
            ) );
                
               
                        /* Processing Icon: icon */
                        if ("off" !== $icon_use_icon_font_size) {
                                $icon_font_size_responsive_active = et_pb_get_responsive_status($icon_icon_font_size_last_edited);
                                $icon_font_size_values = array(
                                    "desktop" => $icon_icon_font_size,
                                    "tablet" => $icon_font_size_responsive_active ? $icon_icon_font_size_tablet : "",
                                    "phone" => $icon_font_size_responsive_active ? $icon_icon_font_size_phone : "",
                                );
                                et_pb_responsive_options()->generate_responsive_css($icon_font_size_values, "%%order_class%% .et-pb-icon.dp-icon-icon", "font-size", $render_slug);
                        }
                        $icon_icon_style = "";
                        if (""!==esc_attr($icon_icon_color)){
							$icon_icon_style = sprintf('color: %1$s;', esc_attr($icon_icon_color));
						}
                        if ("on" === $icon_use_circle) {
                            $icon_icon_style .= sprintf(' background-color: %1$s;', esc_attr($icon_circle_color));
                            if ("on" === $icon_use_circle_border) {
                                $icon_icon_style .= sprintf(' border-color: %1$s;', esc_attr($icon_circle_border_color));
                            }
                        }
					   	
                       $icon = sprintf(' %6$s%5$s<span class="dp_field_icon et-pb-icon dp-icon-icon %2$s%3$s" style="%4$s" aria-hidden="true">%1$s</span>%7$s%8$s' , esc_attr( et_pb_process_font_icon( $icon )), ( 'on' === $icon_use_circle ? ' et-pb-icon-circle' : ''), ( 'on' === $icon_use_circle && 'on' === $icon_use_circle_border ? ' et-pb-icon-circle-border' : ''), $icon_icon_style,"" !== $icon_icon_url && "#" ===$icon_icon_url ? sprintf('<button aria-label="%1$s" id="%2$s">', esc_attr($arialabel), esc_attr($buttonid)) : "","" !== $icon_icon_url && "#" !==$icon_icon_url ? sprintf('<a href="%1$s" target="%2$s" aria-label="%3$s" class="dp_icon_link">', $icon_icon_url, "on" === $icon_icon_new_tab ? "_blank" : "", "" !== $arialabel ? esc_attr($arialabel) : "")  : "","" !== $icon_icon_url && "#" ===$icon_icon_url ? sprintf('</button>') : "",	"" !== $icon_icon_url && "#" !==$icon_icon_url ? sprintf('</a>') : ""); 
                       if ( version_compare( ET_BUILDER_PRODUCT_VERSION, "4.12.1", ">" ) ) {
							$this->generate_styles(
								array(
									"utility_arg"    => "icon_font_family",
									"render_slug"    => $render_slug,
									"base_attr_name" => "icon",
									"important"      => true,
									"selector"       => "%%order_class%% .dp-icon-icon",
									"processor"      => array(
										"ET_Builder_Module_Helper_Style_Processor",
										"process_extended_icon",
									),
								)
							);
						}                       
                        /* End Processing Icon: icon */
                          

            ob_start();
            ?>
            <?php echo $icon; ?>
            <?php

            $output = ob_get_clean();
            return $this->_render_module_wrapper( $output, $render_slug );
        }
        
        
		public function require_divi_global_assets($assets_list){
			return $assets_list;
		}  
    }
            
    ?><?php

    new ET_Builder_Module_DP_DMB_Module_187; 
}