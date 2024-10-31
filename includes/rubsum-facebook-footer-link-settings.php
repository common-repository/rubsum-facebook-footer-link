<?php 

// Create menu Link 
function rsffl_options_menu_link(){
	add_options_page(
		'Facebook Footer Link Options',
		'Facebook Footer Link',
		'manage_options',
		'rsffl-optons',
		'rsffl_options_content'
	);
}

// Create Options Page Content

function rsffl_options_content(){

	//Init Options Global
	global $rsffl_options;

	ob_start(); ?>
		<div class="wrap">
			<h2><?php _e('Facebook Footer Link Settings', 'rsffl_domain'); ?></h2>
			<p><?php _e('Settings for the Facebook Footer Link plugin', 'rsffl_domain'); ?></p>
			<form method="post" action="Options.php">
				<?php settings_fields('rsffl_setting_group'); ?>
				<table class="form-table">
					<tbody>
						<tr>
							<th scope="row"><label for="rsffl_settings[enable]"><?php _e('Enable', 'rsffl_domain'); ?></label></th>
							<td><input name="rsffl_settings[enable]" type="checkbox" id="rsffl_settings[enable]" value="1" <?php checked('1', $rsffl_options['enable']); ?>></td>
						</tr>
						<tr>
							<th scope="row"><label for="rsffl_settings[facebook_url]"><?php _e('Facebook Profile URL', 'rsffl_domain'); ?></label></th>
							<td>
								<input name="rsffl_settings[facebook_url]" type="text" id="rsffl_settings[facebook_url]" value="<?php echo $rsffl_options['facebook_url']; ?>" class="regular-text">
								<p class="description"><?php _e('Enter Your Facebook URL', 'rsffl_domain'); ?></p>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="rsffl_settings[link_color]"><?php _e('Link Color', 'rsffl_domain'); ?></label></th>
							<td>
								<input name="rsffl_settings[link_color]" type="text" id="rsffl_settings[link_color]" value="<?php echo $rsffl_options['link_color']; ?>" class="regular-text">
								<p class="description"><?php _e('Enter a color or HEX value with a #', 'rsffl_domain'); ?></p>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="rsffl_settings[show_in_feed]"><?php _e('Show in Posts Feed', 'rsffl_domain'); ?></label></th>
							<td><input name="rsffl_settings[show_in_feed]" type="checkbox" id="rsffl_settings[show_in_feed]" value="1" <?php checked('1', $rsffl_options['show_in_feed']); ?>></td>
						</tr>
					</tbody>
				</table>
				<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'rsffl_domain'); ?>"></p>
			</form>
		</div>

		
	<?php 

	echo ob_get_clean();
}

add_action('admin_menu', 'rsffl_options_menu_link');

// Register Settings

function rsffl_register_settings(){
	register_setting('rsffl_setting_group', 'rsffl_settings');
}

add_action('admin_init', 'rsffl_register_settings');
