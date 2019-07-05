<?php
function ff_responsive_menu(){
	echo '<div class="ff-responsive-menu-mask"></div>';
	echo '<div class="ff-responsive-menu">';
		echo '<div class="ff-responsive-menu-wrapper">';

			$responsive_menu = get_field('responsive_menu', 'option');

			if( isset($responsive_menu['header_markup']) && $responsive_menu['header_markup'] ) {
				echo '<div class="ff-responsive-menu-header">';
					echo do_shortcode($responsive_menu['header_markup']);
				echo '</div>';
			}
			
			echo '<div class="ff-responsive-menu-body">';
				$menu_name = 'Main Menu';
				if( isset($responsive_menu['menu_name']) && $responsive_menu['menu_name'] ) {
					$menu_name = $responsive_menu['menu_name'];
				}
				wp_nav_menu(['menu' => $menu_name]);
			echo '</div>';
			
			if( isset($responsive_menu['footer_markup']) && $responsive_menu['footer_markup'] ) {
				echo '<div class="ff-responsive-menu-footer">';
					echo do_shortcode($responsive_menu['footer_markup']);
				echo '</div>';
			}
			
		echo '</div>';
	echo '</div>';
}
add_action('wp_footer', 'ff_responsive_menu');
