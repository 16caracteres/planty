<?php
   function planty_theme() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
   }
   add_action( 'wp_enqueue_scripts', 'planty_theme' );

// Register nav menus.
/*   register_nav_menus(
      array(
         'primary' => __( 'Primary Navigation', 'planty' ),
      )
   );
*/
// Hook Admin
/*function display_admin($items, $args) {
    if ($args->theme_location == 'primary') {
        if (is_user_logged_in()) {
            $items .= '<li><a href="<?php echo admin_url(); ?>">Admin</a></li>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'display_admin', 10, 2);*/

function remove_admin_item(){
	if (!is_user_logged_in()) {?>
	<script>
		 document.querySelectorAll('.wp-block-navigation-item')[2].remove()
	</script>
<?php }
}
add_action('wp_footer', 'remove_admin_item');