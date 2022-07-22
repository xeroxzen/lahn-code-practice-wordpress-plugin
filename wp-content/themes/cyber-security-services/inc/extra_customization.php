<?php 

	/*---------------------------Width -------------------*/

	$cyber_security_services_custom_style= "";
	
	$cyber_security_services_theme_width = get_theme_mod( 'cyber_security_services_width_options','full_width');

    if($cyber_security_services_theme_width == 'full_width'){

		$cyber_security_services_custom_style .='body{';

			$cyber_security_services_custom_style .='max-width: 100%;';

		$cyber_security_services_custom_style .='}';

	}else if($cyber_security_services_theme_width == 'Container'){

		$cyber_security_services_custom_style .='body{';

			$cyber_security_services_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$cyber_security_services_custom_style .='}';

	}else if($cyber_security_services_theme_width == 'container_fluid'){

		$cyber_security_services_custom_style .='body{';

			$cyber_security_services_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$cyber_security_services_custom_style .='}';
	}