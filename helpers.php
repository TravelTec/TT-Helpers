<?php   

	/* 
		Plugin Name: Voucher Tec - Shortcode 
		Plugin URI: https://github.com/TravelTec/TT-Helpers
		GitHub Plugin URI: https://github.com/TravelTec/TT-Helpers  
		Description:  O Plugin Travel Tec - Shortcode é um plugin auxiliar, criado para gerenciar e manter o motor de pesquisa com todos os serviços (aéreo, hotéis e veículos). 
		Version: 1.0.0 
		Author: Travel Tec 
		Author URI: https://traveltec.com.br 
		License: GPLv2  
	*/ 

  require 'plugin-update-checker-4.10/plugin-update-checker.php';

  /* VERIFICA ATUALIZAÇÕES NO GITHUB */
	add_action( 'admin_init', 'helpers_update_checker_setting' );  
	function helpers_update_checker_setting() {  
		register_setting( 'vouchertec-helpers', 'serial' );  

	    if ( ! is_admin() || ! class_exists( 'Puc_v4_Factory' ) ) {  
	        return;   
	    }   

	    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(  
	        'https://github.com/TravelTec/TT-Helpers',   
	        __FILE__,   
	        'TT-Helpers'  
	    );   

	    $myUpdateChecker->setBranch('main');   
	}
	/* FIM VERIFICA ATUALIZAÇÕES NO GITHUB */

  /* ADICIONA SHORTCODE COM TODOS OS SERVIÇOS NO MOTOR DE BUSCA */
  add_shortcode('TTBOOKING_ALL_SERVICES', 'get_all_services'); 
  function get_all_services(){ 
      return 'teste shortcode';
  }
  /* FIM SHORTCODE GERAL */
