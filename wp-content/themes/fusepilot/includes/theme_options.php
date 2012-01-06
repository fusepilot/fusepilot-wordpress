<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'fusepilot_options', 'fusepilot_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Settings', 'fusepilottheme' ), __( 'Settings', 'fusepilottheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'fusepilottheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'fusepilottheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'fusepilot_options' ); ?>
			<?php $options = get_option( 'fusepilot_theme_options' ); ?>

			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Front page video', 'fusepilottheme' ); ?></th>
					<td>
						<input id="fusepilot_theme_options[front_page_vimeo_id]" class="regular-text" type="text" name="fusepilot_theme_options[front_page_vimeo_id]" value="<?php esc_attr_e( $options['front_page_vimeo_id'] ); ?>" />
						<label class="description" for="fusepilot_theme_options[front_page_vimeo_id]"><?php _e( 'Vimeo ID', 'fusepilottheme' ); ?></label>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'fusepilottheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/