<?php
/* languages customizations
*/
	if ( !function_exists('reach_change_theme_text') ){
		function reach_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ($domain) {
						case 'woocommerce':
							switch ( $translated_text ) {
					            case 'Place order' :
					                $translated_text = __( 'Make Payment',  'woocommerce'  );
					                break;
					           case 'Add to cart':
					            	$translated_text = __( 'Continue to Checkout',  'woocommerce'  );
					            	break;
					        }
							break;
						default:

				}


	    	return $translated_text;
		} // end function reach_change_theme_text
		add_filter( 'gettext', 'reach_change_theme_text', 20, 3 );
	} // end if not exists reach_change_theme_text
?>
