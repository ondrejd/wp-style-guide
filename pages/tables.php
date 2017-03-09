<?php
/**
 * Page "Tables".
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @since 1.0.1
 */
$display_description = ( ( bool ) WP_Style_Guide::get_option( 'display_detail_description' ) === true ) ? true : false;

?><div class="wrap">

	<?php screen_icon(); ?>

	<h2>
		<?php esc_html_e( 'Tables', WP_Style_Guide::PLUGIN_SLUG ); ?>
		<small><?php _e( 'Generator for table list classes using <code><a href="https://developer.wordpress.org/reference/classes/wp_list_table/" target="blank">WP_List_Table</a></code>.', WP_Style_Guide::PLUGIN_SLUG ); ?>
	</h2>

	<!--
	<div class="wp-pattern-example">
		<p><?php printf(
			__( 'If you want list some data in your plugin you need to implement new class that extends <a href="%1$s" target="blank"><code>WP_List_Table</code></a>. It is not complicated task and we show it here using simple wizard that generates all neccessary code.', WP_Style_Guide::PLUGIN_SLUG ),
			'' 
		); ?></p>
	</div>
	-->

	<!--
	<h3><?php esc_html_e( 'Table List Wizard', WP_Style_Guide::PLUGIN_SLUG ); ?></h3>
	-->

	<form id="list_table-wizard">
		<table class="form-table">
			<tbody>
				<!-- Class name -->
				<tr>
					<th scope="row">
						<label for="plugin-classname"><?= __( 'Class name', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<input type="text" name="classname" id="plugin-classname" class="regular-text" placeholder="<?= __( 'My_Examples_List', WP_Style_Guide::PLUGIN_SLUG ) ?>">
						<?php if ( $display_description === true ): ?>
						<p id="classname_description" class="description"><?php _e( 'Name of the PHP class that will be generated, e.g. \'My_Examples_List\'.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<?php endif;?>
					</td>
				</tr>
				<!-- WP_List_Table Arguments -->
				<tr>
					<th scope="row">
						<label for="plugin-arguments"><?php _e( 'Arguments', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<p class="description"><?php _e( 'Arguments for <a href="https://developer.wordpress.org/reference/classes/wp_list_table/__construct/" target="blank">constructor</a> of <code>WP_List_Table</code> class.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<fieldset>
							<label for="plugin-set_plural">
								<input type="checkbox" name="plugin-set_plural" id="plugin-set_plural">
								<?php _e( 'Plural label:', WP_Style_Guide::PLUGIN_SLUG ); ?>
								<input type="text" name="plural" id="plugin-plural" placeholder="<?= __( 'examples', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="set_plural_description" class="description"><?php _e( 'Plural value used for labels and the objects being listed. This affects things such as CSS class-names and nonces used in the list table, e.g. \'posts\'. Default empty.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
							<?php endif;?>
							<label for="plugin-set_singular">
								<input type="checkbox" name="plugin-set_singular" id="plugin-set_singular">
								<?php _e( 'Singular label:', WP_Style_Guide::PLUGIN_SLUG ); ?>
								<input type="text" name="singular" id="plugin-singular" placeholder="<?php _e( 'example', WP_Style_Guide::PLUGIN_SLUG ); ?>">
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="set_singular_description" class="description"><?php _e( 'Singular label for an object being listed, e.g. \'post\'. Default empty.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
							<?php endif;?>
							<label for="plugin-use_ajax">
								<input type="checkbox" name="use_ajax" id="plugin-use_ajax">
								Use AJAX?
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="use_ajax_description" class="description">
								<?php _e( 'Whether the list table supports AJAX. This includes loading and sorting data, for example. If true, the class will call the <code><a href="https://developer.wordpress.org/reference/classes/wp_list_table/_js_vars/" target="blank">_js_vars()</a></code> method  in the footer to provide variables to any scripts handling AJAX events. Default false.', WP_Style_Guide::PLUGIN_SLUG ); ?>
							<?php endif;?>
							</p>
							<label for="plugin-set_screen">
								<input type="checkbox" name="plugin-set_screen" id="plugin-set_screen">
								<?php _e( 'Screen:', WP_Style_Guide::PLUGIN_SLUG ); ?>
								<input type="text" name="screen" id="plugin-screen" placeholder="<?php _e( 'example', WP_Style_Guide::PLUGIN_SLUG ); ?>">
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="set_screen_description" class="description"><?php _e( 'String containing the hook name used to determine the current screen. If left null, the current screen will be automatically set. Default null.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
							<?php endif;?>
						</fieldset>
					</td>
				</tr>
				<!-- Other options -->
				<tr>
					<th scope="row">
						<label for="plugin-options"><?php _e( 'Options', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<fieldset id="plugin-options">
							<label for="plugin-searchbox">
								<input type="checkbox" name="searchbox" id="plugin-searchbox">
								Add search box?
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="searchbox_description" class="description">
								<?php _e( '<code>XXX</code> Add detail description (with screenshot)!', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
							<?php endif;?>

							<label for="plugin-custom_filter">
								<input type="checkbox" name="custom_filter" id="plugin-custom_filter">
								Add custom filter?
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="custom_filter_description" class="description">
								<?php _e( '<code>XXX</code> Add detail description (with screenshot)!', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
							<?php endif;?>
						</fieldset>
					</td>
				</tr>
				<!-- Views -->
				<tr>
					<th scope="row">
						<label for="plugin-use_views"><?= __( 'Views', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<label for="plugin-use_views">
								<input type="checkbox" name="plugin-use_views" id="plugin-use_views">
								Use custom views?
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="use_views_description" class="description">
								<?= __( '<code>XXX</code> Add detail description (with screenshot)!', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<?php endif;?>
							<div id="use_views_area" class="wp-pattern-example" style="width: 100%; max-width: 500px;">
								<p class="description"><?php esc_html_e( 'Enter as many views you want. Both `key` and `label` fields are required.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
								<table style="width: 100%; max-width: 500px;" class="condensed">
									<thead>
										<tr>
											<th style="width: 40%;"><?php esc_html_e( 'Key', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
											<th style="width: 40%;"><?php esc_html_e( 'Label', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
											<th style="width: 20%;"> </th>
										</tr>
									</thead>
									<tbody>
										<!-- TODO Render existing views here! -->
										<tr>
											<td><b>all</b></td>
											<td><?php _e( 'All', WP_Style_Guide::PLUGIN_SLUG ); ?></td>
											<td><input type="button" value="<?= __( 'Remove', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-secondary"></td>
										</tr>
										<tr>
											<td><b>deleted</b></td>
											<td><?php _e( 'Deleted', WP_Style_Guide::PLUGIN_SLUG ); ?></td>
											<td><input type="button" value="<?= __( 'Remove', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-secondary"></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td>
												<input type="text" name="plugin-new_view_key" id="plugin-new_view_key" class="regular-text" placeholder="<?= __( 'Enter view key', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 100%;">
											</td>
											<td>
												<input type="text" name="plugin-new_view_label" id="plugin-new_view_label" class="regular-text" placeholder="<?= __( 'Enter view label', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 100%;">
											</td>
											<td><input type="button" name="plugin-add_view" value="<?= __( 'Add view', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-primary"></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</fieldset>
					</td>
				</tr>
				<!-- Bulk actions -->
				<tr>
					<th scope="row">
						<label for="plugin-use_bulkactions"><?= __( 'Bulk actions', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<label for="plugin-use_bulkactions">
								<input type="checkbox" name="plugin-use_bulkactions" id="plugin-use_bulkactions">
								Use bulk actions?
							</label>
							<?php if ( $display_description === true ): ?>
							<p id="use_bulkactions_description" class="description">
								<?= __( '<code>XXX</code> Add detail description (with screenshot)!', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<?php endif;?>
							<div id="use_bulkactions_area" class="wp-pattern-example" style="width: 100%; max-width: 500px;">
								<p class="description"><?php esc_html_e( 'Enter as many actions you want. Both `key` and `label` fields are required.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
								<table style="width: 100%; max-width: 500px;">
									<thead>
										<tr>
											<th style="width: 40%;"><?php esc_html_e( 'Key', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
											<th style="width: 40%;"><?php esc_html_e( 'Label', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
											<th style="width: 20%;"> </th>
										</tr>
									</thead>
									<tbody>
										<!-- TODO Render existing actions here! -->
										<tr>
											<td><b>trash</b></td>
											<td><?php _e( 'Trash', WP_Style_Guide::PLUGIN_SLUG ); ?></td>
											<td><input type="button" value="<?= __( 'Remove', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-secondary"></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td>
												<input type="text" name="plugin-new_bulkaction_key" id="plugin-new_bulkaction_key" class="regular-text" placeholder="<?= __( 'Enter bulk action key', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 100%;">
											</td>
											<td>
												<input type="text" name="plugin-new_bulkaction_label" id="plugin-new_bulkaction_label" class="regular-text" placeholder="<?= __( 'Enter bulk action label', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 100%;">
											</td>
											<td><input type="button" name="plugin-add_bulkaction" value="<?= __( 'Add bulk action', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-primary"></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</fieldset>
					</td>
				</tr>
				<!-- Data source -->
				<tr>
					<th scope="row">
						<label for="plugin-ds_php_source"><?= __( 'Data source', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span><?= __( 'Data source', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
							</legend>
							<label for="plugin-ds_php_source">
								<input type="radio" name="plugin-datasource" id="plugin-ds_php_source">
								PHP source
							</label><br>
							<label for="plugin-ds_wp_data">
								<input type="radio" name="plugin-datasource" id="plugin-ds_wp_data">
								Query for WordPress data
							</label><br>
							<label for="plugin-ds_db_table">
								<input type="radio" name="plugin-datasource" id="plugin-ds_db_table">
								Own database table
							</label><br>
							<label for="plugin-ds_ext_uri">
								<input type="radio" name="plugin-datasource" id="plugin-ds_ext_uri">
								External data source
							</label>
						</fieldset>
					</td>
				</tr>
				<!-- Columns -->
				<tr>
					<th scope="row">
						<label for="plugin-columns"><?= __( 'Columns', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<div id="columns_area" class="wp-pattern-example" style="width: 100%; max-width: 500px;">
								<p class="description"><?php esc_html_e( 'Enter as many columns you want. Both `key` and `label` fields are required.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
								<table style="width: 100%; max-width: 500px;">
									<thead>
										<tr>
											<th style="width: 40%;"><?php esc_html_e( 'Key', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
											<th style="width: 40%;"><?php esc_html_e( 'Label', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
											<th style="width: 20%;"> </th>
										</tr>
									</thead>
									<tbody>
										<!-- TODO Render existing actions here! -->
										<tr>
											<td><b>trash</b></td>
											<td><?php _e( 'Trash', WP_Style_Guide::PLUGIN_SLUG ); ?></td>
											<td><input type="button" value="<?= __( 'Remove', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-secondary"></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td>
												<input type="text" name="plugin-new_columns_key" id="plugin-new_columns_key" class="regular-text" placeholder="<?= __( 'Enter column key', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 100%;">
											</td>
											<td>
												<input type="text" name="plugin-new_columns_label" id="plugin-new_columns_label" class="regular-text" placeholder="<?= __( 'Enter column label', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 100%;">
											</td>
											<td><input type="button" name="plugin-add_column" value="<?= __( 'Add column', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-primary"></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- TODO Add spinner and make this works via AJAX (with safe-fall to plain POST and PHP) -->
		<input type="submit" name="plugin-submit" value="<?= __( 'Generate class', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-primary">
		<input type="submit" name="plugin-submit2" value="<?= __( 'Test class', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button">
	</form>

	<hr>

	<!-- TODO Here should be rendered generated PHP source -->
	<pre><code class="language-php">&lt;?php
/**
 * File description ...
 *
 * @package Name_Of_Package
 * @since 1.0
 */

if ( ! class_exists( 'My_Examples_List' ) ):

/**
 * Class description ...
 *
 * @see WP_List_Table
 * @since 1.0
 */
class My_Examples_List extends WP_List_Table {
	// ...
}

endif;

</code></pre>

</div><!-- .wrap -->