<?php
if(!class_exists("ET_Builder_Module_DP_DMB_Module_157")){

    class ET_Builder_Module_DP_DMB_Module_157 extends ET_Builder_Module {        
        
        public $slug = "et_pb_dp_dmb_module_da3a0428";
         public $vb_support = "partial";    
        
        public function init() {
            $this->name = "FD Button" ;
            
            
            $this->main_css_element = "%%order_class%%";
        }

        public function get_fields() {
            $fields = array(
                                    
	"fdbutton_text" => array(
                        "label" => __( "FD Button Text", "dp_dmb" ),
                        "type" => "text",                               
                        "default" => __( "Read More", "dp_dmb" ),
                        
                        "description" => __( "Enter the button text.", "dp_dmb" ),
                        "tab_slug" => "general",
                        "toggle_slug" => "content",
	),                     
	"fdbutton_url" => array(
                        "label" => __( "Link URL", "dp_dmb" ),
                        "type" => "text",
                         
                        "description" => __( "Input the link URL or use # to attach custom behavior (in combination with Button ID).", "dp_dmb" ),
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
                            "description" => __("", "dp_dmb"),
                        ),
				"fdbutton_new_tab" => array(
                        "label" => __( "Open Link in New Tab", "dp_dmb" ),
                        "type" => "yes_no_button",
                        "description" => __( "Choose whether or not your link opens in a new window", "dp_dmb" ),
                        "options" => array(
                            "off" => __("No", "dp_dmb"),
                            "on" => __("Yes", "dp_dmb"),
                        ),
                        "default" => "off",
                        "tab_slug" => "general",
                        "toggle_slug" => "content",
	), 
				"buttonid" => array(
                            "label" => __("Button ID", "dp_dmb"),
                            "type" => "text",                         
                            "mobile_options" => false,   
                            "default" => __( "", "dp_dmb" ),
                            
                            "tab_slug" => "general",
                            "toggle_slug" => "content",
                            "description" => __("If your Link URL is #, enter a button ID", "dp_dmb"),
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
                "button" => array( 
                    "fdbutton" => array(
	   "label" => __("FD Button", "dp_dmb"),
	   "css" => array("main" => "{$this->main_css_element} .dp_field_fdbutton.et_pb_button", "important" => "all",),
                    ), ),
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
            /* wp_enqueue_style("dmb-module-157"); */
             
			add_filter( "et_late_global_assets_list", array( $this, "require_divi_global_assets" ) );
             
       }

        public function render( $attrs, $content, $render_slug ) {
            $background_layout    = $this->props["background_layout"];
            $fdbutton_url = $this->props["fdbutton_url"]; $fdbutton_text = $this->props["fdbutton_text"]; $fdbutton_new_tab = $this->props["fdbutton_new_tab"]; $fdbutton_rel = $this->props["fdbutton_rel"]; $fdbutton_icon = $this->props["fdbutton_icon"]; $custom_fdbutton = $this->props["custom_fdbutton"]; $arialabel = $this->props["arialabel"]; $buttonid = str_replace(' ','-',esc_attr($this->props["buttonid"])); $fdbutton_icon_placement = $this->props["fdbutton_icon_placement"]; $fdbutton_icon_code = str_replace(';','', str_replace('&#x','', esc_attr(et_pb_process_font_icon($fdbutton_icon)))); $fdbutton_icon_hover = $this->props["fdbutton_on_hover"]; $fdbutton_icon_color = $this->props["fdbutton_icon_color"]; 
                
            $this->add_classname( array(
                "et_pb_bg_layout_{$background_layout}",
                $this->get_text_orientation_classname(),
            ) );
                
                 
                        /* Processing Button: fdbutton */
                        if ("" !== $fdbutton_text) {
                          $fdbutton= sprintf(' %11$s%9$s aria-label="%7$s" class="dp_field_fdbutton et_pb_button %4$s"%5$s>%14$s%1$s%13$s%10$s%12$s' , 
						( "" !== $fdbutton_text ? esc_attr($fdbutton_text) : ""),
						( "" !== $fdbutton_url ? $fdbutton_url : "#"), 
						"" !== $fdbutton_icon && "on" === $custom_fdbutton ? sprintf(' data-icon="%1$s"' , esc_attr($fdbutton_icon_placement)) : "", 
						"" !== $fdbutton_icon && "on" === $custom_fdbutton ? " et_pb_custom_button_icon" : "", 
						$this->get_rel_attributes($fdbutton_rel), 
						"on" === $fdbutton_new_tab ? "_blank" : "",
						"" !== $arialabel ? esc_attr($arialabel) : "", 
						"" !== $fdbutton_icon && "on" === $custom_fdbutton ? sprintf(' fd-icon-%1$s', $fdbutton_icon_code): "",
						"" !== $fdbutton_url && "#" !== $fdbutton_url ? sprintf('<a href="%1$s" target="%2$s" %3$s ', $fdbutton_url,"on" === $fdbutton_new_tab ? "_blank" : "", "" !== esc_attr($buttonid) ? "id=".esc_attr($buttonid) : "" ) : "",
						"" !== $fdbutton_url && "#" !== $fdbutton_url ? sprintf("</a>") : "",
						"" === $fdbutton_url || "#" === $fdbutton_url ? sprintf('<button id="%1$s" ', esc_attr($buttonid)) : "",
						"" === $fdbutton_url || "#" === $fdbutton_url ? sprintf('</button>') : "",
						"off" === $fdbutton_new_tab && "right" === $fdbutton_icon_placement ? sprintf('<span aria-hidden="true" class="fd-icon fd-icon-right fd-icon-%2$s" style="color: %3$s">%1$s</span>', esc_attr( et_pb_process_font_icon( $fdbutton_icon)), $fdbutton_icon_hover, $fdbutton_icon_color) : "",
						"off" === $fdbutton_new_tab && "left" === $fdbutton_icon_placement ? sprintf('<span aria-hidden="true" class="fd-icon fd-icon-left fd-icon-%2$s" style="color: %3$s">%1$s</span>', esc_attr( et_pb_process_font_icon( $fdbutton_icon)), $fdbutton_icon_hover, $fdbutton_icon_color) : ""					 
											);
                       }else{ $fdbutton= ""; }
                       /* End Processing Button: fdbutton */
                           

            ob_start();
            ?>
             <?php echo $fdbutton;  ?> 
            <?php

            $output = ob_get_clean();
            return $this->_render_module_wrapper( $output, $render_slug );
        }
        
        
		public function require_divi_global_assets($assets_list){
			return $assets_list;
		}  
    }
            
    ?><?php

    new ET_Builder_Module_DP_DMB_Module_157; 
}