<?php
  global $WCFM;
?>
<div class="wcfmmp-collapse wcfm_popup_wrapper" id="wcfmmp_shipping_method_edit_container">
  <div class="wcfm-collapse-content" >
      <div class="page_collapsible  modal_head" id="wcfmmp_shipping_method_edit_general_head">
        <label class="wcfmfa fa-truck"></label>
        <span>
          <?php _e( 'Edit Shipping Methods', 'wc-multivendor-marketplace' ); ?>
        </span>
      </div>
      <div class="modal_body" id="wcfmmp_shipping_method_edit_form_general_body">
        <?php
          $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            array(
              "method_id_selected" => array(
                'label' => false, 
                'name' => 'method_id_selected',
                'type' => 'hidden', 
                'class' => 'wcfm-text wcfm_ele', 
                'value' => ''  
              )
            )
          );
          $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            array(
              "instance_id_selected" => array(
                'label' => false, 
                'name' => 'instance_id_selected',
                'type' => 'hidden', 
                'class' => 'wcfm-text wcfm_ele', 
                'value' => ''  
              )
            )
          );
        ?>
        <div class="shipping_form" id="free_shipping">
          <?php
          
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_title_fields',
								array(
									"method_title_fs" => array(
										'label' => __('Method Title', 'wc-multivendor-marketplace'), 
										'name' => 'method_title',
										'type' => 'text', 
										'class' => 'wcfm-text wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('Enter method title', 'wc-multivendor-marketplace'),
										'value' => ''  
									)
								)
							)
            );
          ?>
          <?php
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_cost_fields',
								array(
									"minimum_order_amount_fs" => array(
										'label' => __('Minimum order amount for free shipping', 'wc-multivendor-marketplace'), 
										'name' => 'minimum_order_amount',
										'type' => 'number', 
										'class' => 'wcfm-text wcfm_ele wcfm_non_negative_input', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('0.00', 'wc-multivendor-marketplace'),
										'value' => ''  
									)
								)
							)
            );
          ?>
          <?php
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_description_fields',
								array(
									"method_description_fs" => array(
										'label' => __('Description', 'wc-multivendor-marketplace'), 
										'name' => 'method_description',
										'type' => 'textarea', 
										'class' => 'wcfm-textarea wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'value' => ''  
									)
								)
							)
            );
          ?>
        </div>
        <!-- Local Pickup -->
        <div class="shipping_form" id="local_pickup">
          <?php
          
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_title_fields',
								array(
									"method_title_lp" => array(
										'label' => __('Method Title', 'wc-multivendor-marketplace'), 
										'name' => 'method_title',
										'type' => 'text', 
										'class' => 'wcfm-text wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('Enter method title', 'wc-multivendor-marketplace'),
										'value' => ''  
									)
								)
							)
            );
          ?>
          <?php
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_cost_fields',
								array(
									"method_cost_lp" => array(
										'label' => __('Cost', 'wc-multivendor-marketplace'), 
										'name' => 'method_cost',
										'type' => 'number', 
										'class' => 'wcfm-text wcfm_non_negative_input wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('0.00', 'wc-multivendor-marketplace'),
										'value' => ''  
									)
								)
							)
            );
          ?>
          
          <?php
          if(apply_filters('show_shipping_zone_tax', true) && apply_filters('wcfmmp_is_allow_show_shipping_zone_tax', true) ) {
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_tax_fields',
								array(
									"method_tax_status_lp" => array(
										'label' => __('Tax Status', 'wc-multivendor-marketplace'), 
										'name' => 'method_tax_status',
										'type' => 'select', 
										'class' => 'wcfm-select wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'options' => array(
												'none' => __('None', 'wc-multivendor-marketplace'), 
												'taxable' => __('Taxable' , 'wc-multivendor-marketplace') 
												)  
									)
								)
              )
            );
          }
          ?>
          
          <?php
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_description_fields',
								array(
									"method_description_lp" => array(
										'label' => __('Description', 'wc-multivendor-marketplace'), 
										'name' => 'method_description',
										'type' => 'textarea', 
										'class' => 'wcfm-textarea wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'value' => ''  
									)
								)
							)
            );
          ?>
        </div>
        
        <div class="shipping_form" id="flat_rate">
          <?php
          
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_title_fields',
								array(
									"method_title_fr" => array(
										'label' => __('Method Title', 'wc-multivendor-marketplace'), 
										'name' => 'method_title',
										'type' => 'text', 
										'class' => 'wcfm-text wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('Enter method title', 'wc-multivendor-marketplace'),
										'value' => ''  
									)
								)
							)
            );
          ?>
          <?php
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_cost_fields',
								array(
									"method_cost_fr" => array(
										'label' => __('Cost', 'wc-multivendor-marketplace'), 
										'name' => 'method_cost',
										'type' => 'text', 
										'class' => 'wcfm-text wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('0.00', 'wc-multivendor-marketplace'),
										'value' => '',
									)
								)
              )
            );
          ?>
          <div class="description">
						<?php _e( 'Enter a cost (excl. tax) or sum, e.g. <code>10.00 * [qty]</code>.', 'wc-multivendor-marketplace' ) . '<br/><br/>' . _e( 'Use <code>[qty]</code> for the number of items, <br/><code>[cost]</code> for the total cost of items, and <code>[fee percent="10" min_fee="20" max_fee=""]</code> for percentage based fees.', 'wc-multivendor-marketplace' ); ?>
					</div>
          
          <?php
          if(apply_filters('show_shipping_zone_tax', true) && apply_filters('wcfmmp_is_allow_show_shipping_zone_tax', true) ) {
            $WCFM->wcfm_fields->wcfm_generate_form_field (
            	apply_filters( 'wcfmmp_shipping_zone_tax_fields',
								array(
									"method_tax_status_fr" => array(
										'label' => __('Tax Status', 'wc-multivendor-marketplace'), 
										'name' => 'method_tax_status',
										'type' => 'select', 
										'class' => 'wcfm-select wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'options' => array(
												'none' => __('None', 'wc-multivendor-marketplace'), 
												'taxable' => __('Taxable' , 'wc-multivendor-marketplace') 
												)  
									)
								)
							)
            );
          }
          ?>
          
          <?php
            $WCFM->wcfm_fields->wcfm_generate_form_field ( 
            	apply_filters( 'wcfmmp_shipping_zone_description_fields',
								array(
									"method_description_fr" => array(
										'label' => __('Description', 'wc-multivendor-marketplace'), 
										'name' => 'method_description',
										'type' => 'textarea', 
										'class' => 'wcfm-textarea wcfm_ele', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'value' => ''  
									)
								)
							)
            );
          ?>
          <?php if( apply_filters( 'wcfmmp_is_allow_store_shipping_by_shipping_classes', true ) ) { ?>
            <div class="wcfmmp_shipping_classes">
              <h3><?php _e('Shipping Class Cost', 'wc-multivendor-marketplace'); ?></h3> 
              <div class="description">
                <?php _e('These costs can be optionally entered based on the shipping class set per product( This cost will be added with the shipping cost above).', 'wc-multivendor-marketplace'); ?>
              </div>
              <?php
              
              $shipping_classes =  WC()->shipping->get_shipping_classes();
              //print_r($shipping_classes);
              if( !empty( $shipping_classes ) ) {
                foreach ($shipping_classes as  $shipping_class ) {
                	if ( ! isset( $shipping_class->term_id ) ) {
										continue;
									}
                  
                  $WCFM->wcfm_fields->wcfm_generate_form_field ( 
                  	apply_filters( 'wcfmmp_shipping_zone_description_fields',
											array(
												$shipping_class->slug => array(
													'label' => __('Cost of Shipping Class: "', 'wc-multivendor-marketplace') . $shipping_class->name . '"' , 
													'name' => 'shipping_class_cost[]',
													'type' => 'text', 
													'class' => 'wcfm-text wcfm_ele sc_vals', 
													'label_class' => 'wcfm_title wcfm_ele', 
													'placeholder' => __('N/A', 'wc-multivendor-marketplace'),
													'value' => '',
													'custom_attributes' => array('shipping_class_id' => $shipping_class->term_id),
												)
											), $shipping_class->term_id, $shipping_class->name, $shipping_class
										)
                  ); ?>
                  <div class="description">
                    <?php _e( 'Enter a cost (excl. tax) or sum, e.g. <code>10.00 * [qty]</code>.', 'wc-multivendor-marketplace' ) . '<br/><br/>' . _e( 'Use <code>[qty]</code> for the number of items, <br/><code>[cost]</code> for the total cost of items, and <code>[fee percent="10" min_fee="20" max_fee=""]</code> for percentage based fees.', 'wc-multivendor-marketplace' ); ?>
                  </div>
                  
                <?php }
              }
              
              $WCFM->wcfm_fields->wcfm_generate_form_field ( 
								array(
									'no_class_cost' => array(
										'label' => __( 'No shipping class cost', 'woocommerce' ), 
										'name' => 'shipping_class_cost[]',
										'type' => 'text', 
										'class' => 'wcfm-text wcfm_ele sc_vals', 
										'label_class' => 'wcfm_title wcfm_ele', 
										'placeholder' => __('N/A', 'wc-multivendor-marketplace'),
										'value' => '',
										'custom_attributes' => array('shipping_class_id' => 'no_class_cost' ),
									)
								)
							); ?>
							<div class="description">
								<?php _e( 'Enter a cost (excl. tax) or sum, e.g. <code>10.00 * [qty]</code>.', 'wc-multivendor-marketplace' ) . '<br/><br/>' . _e( 'Use <code>[qty]</code> for the number of items, <br/><code>[cost]</code> for the total cost of items, and <code>[fee percent="10" min_fee="20" max_fee=""]</code> for percentage based fees.', 'wc-multivendor-marketplace' ); ?>
							</div>
              
							<?php
							$WCFM->wcfm_fields->wcfm_generate_form_field ( 
									array(
										"calculation_type" => array(
											'label' => __('Calculation type', 'wc-multivendor-marketplace'),
											'name' => 'calculation_type',
											'type' => 'select', 
											'class' => 'wcfm-select wcfm_ele', 
											'label_class' => 'wcfm_title wcfm_ele', 
											'options' => array(
													'class' => __('Per class: Charge shipping for each shipping class individually', 'wc-multivendor-marketplace' ),
													'order' => __('Per order: Charge shipping for the most expensive shipping class', 'wc-multivendor-marketplace' ),
											)
											
										)
									)
								);
              ?>
            </div>
          <?php } ?>
          
        </div>

		<div class="shipping_form" id="weight-class-shipping">
          	<?php
					$WCFM->wcfm_fields->wcfm_generate_form_field ( 
						apply_filters( 'wcfmmp_shipping_zone_title_fields',
										array(
											"method_title_wcs" => array(
												'label' => __('Titulo Metodo de Envio', 'wc-multivendor-marketplace'), 
												'name' => 'method_title',
												'type' => 'text', 
												'class' => 'wcfm-text wcfm_ele', 
												'label_class' => 'wcfm_title wcfm_ele', 
												'placeholder' => __('Enter method title', 'wc-multivendor-marketplace'),
												'value' => ''  
											)
										)
									)
					);
          		?>

				<div class="wrapper_weight_rules" id="weight-class-shipping-rules">
					<p class="method_title_fr wcfm_title wcfm_ele">
						<strong>
							<?php _e('Portes por peso (g)', 'wc-multivendor-marketplace'); ?>
						</strong>
					</p>
					<div id="wrapper-weight-rules-content">
						<div class="wrapper_weight_rules wrapper_weight_rules_fields" id="weight-class-shipping-rules">
							<div class="wrapper_weight_rules_min" id="weight-class-shipping-rules_min">
								<label>
									<?php _e("De", 'wc-multivendor-marketplace'); ?>
								</label>
								<input 
								type="text" 
								class="wcfm-text wcfm_ele weight-class-shipping-rules-min" 
								name="weight-class-shipping-rules_min" 
								id="weight-class-shipping-rules_min" 
								placeholder="<?php _e('Peso minimo', 'wc-multivendor-marketplace'); ?>" 
								value="<?php echo isset($weight_rules[$i]['min']) ? $weight_rules[$i]['min'] : ''; ?>"
								/>
							</div>
							<div class="wrapper_weight_rules_max" id="weight-class-shipping-rules_max">
								<label>
									<?php _e("Até", 'wc-multivendor-marketplace'); ?>
								</label>
								<input 
								type="text" 
								class="wcfm-text wcfm_ele weight-class-shipping-rules-max" 
								name="weight-class-shipping-rules_max" 
								id="weight-class-shipping-rules_max" 
								placeholder="<?php _e('Peso máximo', 'wc-multivendor-marketplace'); ?>" 
								value="<?php echo isset($weight_rules[$i]['max']) ? $weight_rules[$i]['max'] : ''; ?>"
								/>
							</div>
							<div class="wrapper_weight_rules_price" id="weight-class-shipping-rules_price">
								<label>
									<?php _e("Preço", 'wc-multivendor-marketplace'); ?>
								</label>
								<input 
								type="text" 
								class="wcfm-text wcfm_ele weight-class-shipping-rules-price" 
								name="weight-class-shipping-rules_price" 
								id="weight-class-shipping-rules_price" 
								placeholder="<?php _e('Preço', 'wc-multivendor-marketplace'); ?>" 
								value="<?php echo isset($weight_rules[$i]['price']) ? $weight_rules[$i]['price'] : ''; ?>"
								/>
							</div>
							<div class="shipping_weight_action_buttons" id="shipping_weight_action_buttons">
								<button class="wcfm_btn wcfm_btn-theme wcfm_btn-add-weight-class" id="add_weight_class">
									<span>
										<i class="wcfmfa fa-plus"></i>
									</span>
								</button>
								<button class="wcfm_btn wcfm_btn-theme wcfm_btn-remove-weight-class" id="remove_weight_class">
									<span>
										<i class="wcfmfa fa-minus"></i>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrapper_shipping_classes" id="shipping_classes">
					<p class="method_title_fr wcfm_title wcfm_ele">
						<strong>
							<?php _e('Portes por classe de envio', 'wc-multivendor-marketplace'); ?>
						</strong>
					</p>
					<div id="wrapper-shipping-classes-content">
						<div class="shipping_classes_item">
							<div class="wrapper_shipping_classes_options" id="shipping_classes_options">
								<label>
									<?php _e("Classe de envio", 'wc-multivendor-marketplace'); ?>
								</label>
								<select 
									class="wcfm-select wcfm_ele shipping_classes_select" 
									name="shipping_classes_select" 
									id="shipping_classes_select" 
									>
									<option value=""><?php _e('Selecione uma classe de envio', 'wc-multivendor-marketplace'); ?></option>
									<?php

									/*
										Stole from: /wc-frontend-manager/views/products-manager/wcfm-view-products-manage.php:365
									*/

									$current_user_id = apply_filters( 'wcfm_current_vendor_id', get_current_user_id() );

									$product_shipping_class = get_terms( 'product_shipping_class', array('hide_empty' => 0));
									$shipping_classes = apply_filters( 'wcfm_product_shipping_class', $product_shipping_class );
									$shipping_option_array = array('_no_shipping_class' => __('No shipping class', 'wc-frontend-manager'));
									if( $product_shipping_class && !empty( $product_shipping_class ) ) {
										foreach($product_shipping_class as $product_shipping) {
											$variation_shipping_option_array[$product_shipping->term_id] = $product_shipping->name;
											$shipping_option_array[$product_shipping->term_id] = $product_shipping->name;
										}
									}
									if( !empty( $shipping_option_array ) ) {
										foreach ($shipping_option_array as $key => $shipping_class_name ) { ?>
											<option 
											value="<?php echo $key; ?>"
											selected="<?php echo $key == $selected_shipping_class ? 'selected' : ''; ?>"
											>
												<?php echo $shipping_class_name; ?>
											</option>
											<?php
										}
									}
									?>
								</select>
							</div>
							<div class="wrapper_shipping_classes_options" id="shipping_classes_options">
								<label>
									<?php _e("Preço", 'wc-multivendor-marketplace'); ?>
								</label>
								<input 
									type="text" 
									class="wcfm-text wcfm_ele shipping_classes_price" 
									name="shipping_classes_price" 
									id="shipping_classes_price" 
									placeholder="<?php _e('Preço', 'wc-multivendor-marketplace'); ?>" 
									value=""
								/>
							</div>
							<div class="shipping_class_action_buttons" id="shipping_class_action_buttons">
								<button class="wcfm_btn wcfm_btn-theme wcfm_btn-add-shpping-class" id="add_shipping_class">
									<span>
										<i class="wcfmfa fa-plus"></i>
									</span>
								</button>
								<button class="wcfm_btn wcfm_btn-theme wcfm_btn-remove-shipping-class" id="remove_shipping_class">
									<span>
										<i class="wcfmfa fa-minus"></i>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        
        <?php do_action( 'wcfmmp_shipping_method_edit_popup_end' ); ?>
        
      </div>
      <div class="modal_footer" id="wcfmmp_shipping_method_edit_general_footer">
        <div class="inner">
          <button class="wcfmmp_submit_button wcfm_popup_button" id="wcfmmp_shipping_method_edit_button">
            <?php _e( 'Save Method Settings', 'wc-multivendor-marketplace' ); ?>
          </button>
        </div>
      </div>
    
  </div>
</div>