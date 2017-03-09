<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?= __( 'Wizards - Plugin Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></h1>

	<form id="wizard-plugin">
		<table class="form-table">
			<tbody>
				<!-- Name -->
				<tr>
					<th scope="row">
						<label for="plugin-name"><?= __( 'Name', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-name" id="plugin-name" class="regular-text" placeholder="<?= __( 'Enter name of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Identifier -->
				<tr>
					<th scope="row">
						<label for="plugin-identifier"><?= __( 'Identifier', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-identifier" id="plugin-identifier" class="regular-text" placeholder="<?= __( 'Enter identifier of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</p>
							<p class="description"><?= __( '<b>Identifier</b> could be derrived from plugin\'s name and can NOT contains spaces, tabs and other control or special characters.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Description -->
				<tr>
					<th scope="row">
						<label for="plugin-description"><?= __( 'Description', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-description"><?= __( 'Short description:', WP_Style_Guide::PLUGIN_SLUG ) ?></label><br>
								<textarea name="plugin-description" id="plugin-description" class="long-text" placeholder="<?= __( 'Enter short description of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="5"></textarea>
							</p>
							<p>
								<label for="plugin-description_full"><?= __( 'Full description:', WP_Style_Guide::PLUGIN_SLUG ) ?></label><br>
								<textarea name="plugin-description_full" id="plugin-description_full" class="long-text" placeholder="<?= __( 'Enter full description of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="10"></textarea>
							</p>
							<p class="description"><?= __( 'Both descriptions are used in <code>readme.txt</code> file.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Tags -->
				<tr>
					<th scope="row">
						<label for="plugin-tags"><?= __( 'Tags', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Enter list of tags separated by comma.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p>
								<input type="text" name="plugin-tags" id="plugin-tags" class="regular-text" placeholder="<?= __( 'Enter comma separated list of tags', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 695px;">
							</p>
							<p class="description"><?= __( 'For example: <code>red,black,blue</code>.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Version -->
				<tr>
					<th scope="row">
						<label for="plugin-version"><?= __( 'Version', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Enter current version of the plugin, minimal required <b>WordPress</b> version, maximal version of <b>WordPress</b> on which was plugin tested and plugin\'s version which is considered to be stable.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p>
								<label for="plugin-version" style="width: 130px;"><?= __( 'Current version:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
								<input type="text" name="plugin-version" id="plugin-version" style="width: 120px;">
							</p>
							<p>
								<label for="plugin-required_at_least" style="width: 130px;"><?= __( 'Required at least:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
								<input type="text" name="plugin-required_at_least" id="plugin-required_at_least" style="width: 120px;">
							</p>
							<p>
								<label for="plugin-tested_up_to" style="width: 130px;"><?= __( 'Tested up to:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
								<input type="text" name="plugin-tested_up_to" id="plugin-tested_up_to" style="width: 120px;">
							</p>
							<p>
								<label for="plugin-stable_tag" style="width: 130px;"><?= __( 'Stable tag:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
								<input type="text" name="plugin-stable_tag" id="plugin-stable_tag" style="width: 120px;">
							</p>
							<p class="description"><?= __( 'Some valid versions as an example: <b>3.4.0</b>, <b>4.4</b>, <b>1.2.1</b> etc.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Author -->
				<tr>
					<th scope="row">
						<label for="plugin-author"><?= __( 'Author', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Enter author\'s name and valid homepage\'s URL.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p>
								<label for="plugin-author" style="width: 130px;"><?= __( 'Author:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
								<input type="text" name="plugin-author" id="plugin-author" class="regular-text" placeholder="<?= __( 'Enter author\'s name', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</p>
							<p>
								<label for="plugin-author_uri" style="width: 130px;"><?= __( 'URI:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
								<input type="text" name="plugin-author_uri" id="plugin-author_uri" class="regular-text" placeholder="<?= __( 'Enter URI of author\'s homepage', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Contributors -->
				<tr>
					<th scope="row">
						<label for="plugin-contributors"><?= __( 'Contributors', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p><?= sprintf( __( 'Comma separated list of contributors.', WP_Style_Guide::PLUGIN_SLUG ), '<a href="https://wordpress.org/" target="blank">', '</a>' ) ?></p>
							<p>
								<input type="text" name="plugin-contributors" id="plugin-contributors" class="regular-text" placeholder="<?= __( 'Enter comma separated list of contributors', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 695px;">
							</p>
							<p class="description"><?= __( 'For example: <code>joed,jimb,janed</code>.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- License -->
				<tr>
					<th scope="row">
						<label for="plugin-author"><?= __( 'License', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<legend>
								<span><?= __( 'Either select or enter name of license and its URL. You can also select no license but it is not recommended.', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
							</legend>
							<div>
								<label title="<?= __( 'No license', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="license">
									<input type="radio" name="plugin-license" value="none" checked="checked">
									<?= __( 'No license', WP_Style_Guide::PLUGIN_SLUG ) ?>
								</label>
							</div>
							<div>
								<label title="<?= __( 'Selected license', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="license">
								<input type="radio" name="plugin-license" value="custom">
								<?= __( 'Selected:', WP_Style_Guide::PLUGIN_SLUG ) ?>
								<div style="padding-left: 25px;" class="license_custom">
									<div class="inputs-subarea">
										<span class="screen-reader-text"><?= __( 'select license', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
										<label class="screen-reader-text" for="plugin-license_select"><?= __( 'Licenses', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
										<select name="plugin-license_select" id="plugin-license_select" disabled="disabled">
											<option value="Apache License 2.0" data-license_url="http://www.apache.org/licenses/LICENSE-2.0">Apache License 2.0</option>
											<option value="GPL 2.0" data-license_url="http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt">GPL v2</option>
											<option value="GPL 3.0" data-license_url="http://www.gnu.org/licenses/gpl-3.0.txt">GPL v3</option>
											<option value="MPL 2.0" data-license_url="https://www.mozilla.org/MPL/2.0/">MPL 2.0</option>
											<option value="MIT License" data-license_url="https://opensource.org/licenses/MIT">MIT License</option>
										</select>
									</div>
								</div>
							</div>
							<div>
								<label title="<?= __( 'Custom license', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="license">
								<input type="radio" name="plugin-license" value="other">
								<?= __( 'Custom license:', WP_Style_Guide::PLUGIN_SLUG ) ?>
								<div style="padding-left: 25px;" class="license_other">
									<div class="inputs-subarea">
										<p>
											<label for="plugin-license_other_name" style="width: 130px;"><?= __( 'Name:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
											<input type="text" name="plugin-license_other_name" id="plugin-license_other_name" class="regular-text" placeholder="<?= __( 'Enter license\'s name', WP_Style_Guide::PLUGIN_SLUG ) ?>" disabled="disabled">
										</p>
										<p>
											<label for="plugin-license_other_uri" style="width: 130px;"><?= __( 'URI:', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
											<input type="text" name="plugin-license_other_uri" id="plugin-license_other_uri" class="regular-text" placeholder="<?= __( 'Enter URI of license', WP_Style_Guide::PLUGIN_SLUG ) ?>" disabled="disabled">
										</p>
										<p class="description"><?= __( 'For example: <code>Mozilla Public License 2.0</code> and <code>https://www.mozilla.org/MPL/2.0/</code>.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
									</div>
								</div>
							</div>
						</fieldset>
					</td>
				</tr>
				<!-- Donate Link -->
				<tr>
					<th scope="row">
						<label for="plugin-donate_link"><?= __( 'Donate Link', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Valid URL of link with donation page. Leave blank if you don\'t have one.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p>
								<input type="text" name="plugin-donate_link" id="plugin-donate_link" class="regular-text" placeholder="<?= __( 'Enter donate link', WP_Style_Guide::PLUGIN_SLUG ) ?>" style="width: 695px;">
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Installation -->
				<tr>
					<th scope="row">
						<label for="plugin-installation"><?= __( 'Installation', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-installation"><?= __( 'Installation instructions:', WP_Style_Guide::PLUGIN_SLUG ) ?></label><br>
								<textarea name="plugin-installation" id="plugin-installation" class="long-text" placeholder="<?= __( 'Enter plugin installation instructions', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="10"><?= WP_Style_Guide::get_option( 'default_install_text' ) ?></textarea>
							</p>
							<p class="description"><?= __( 'Installation instructions are part of <code>readme.txt</code> file.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- FAQ -->
				<tr>
					<th scope="row">
						<label for="plugin-faq"><?= __( 'FAQ', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-faq"><?= __( 'Frequently asked questions:', WP_Style_Guide::PLUGIN_SLUG ) ?></label><br>
								<textarea name="plugin-faq" id="plugin-faq" class="long-text" placeholder="<?= __( 'Enter frequently asked questions', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="10"><?= WP_Style_Guide::get_option( 'default_faq_text' ) ?></textarea>
							</p>
							<p class="description"><?= __( 'Frequently asked questions are part of <code>readme.txt</code> file.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- TODO Screenshots -->
				<!-- Change Log -->
				<tr>
					<th scope="row">
						<label for="plugin-changelog"><?= __( 'Change Log', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<textarea name="plugin-changelog" id="plugin-changelog" class="long-text" placeholder="<?= __( 'Enter change log of your plugin' ) ?>" cols="72" rows="10"><?= WP_Style_Guide::get_option( 'default_changelog_text' ) ?></textarea>
							</p>
							<p class="description"><?= __( 'Change log is a part of <code>readme.txt</code> file.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Upgrade notice -->
				<tr>
					<th scope="row">
						<label for="plugin-upgrade"><?= __( 'Upgrade notice', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<textarea name="plugin-upgrade" id="plugin-upgrade" class="long-text" placeholder="<?= __( 'Enter upgrade notice', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="10"></textarea>
							</p>
							<p class="description"><?= __( 'Upgrade notice is a part of <code>readme.txt</code> file. When starting new plugin this field will be probably empty.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Options -->
				<tr>
					<th scope="row">
						<label for="plugin-has_dependency"><?= __( 'Options', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text"><?= __( 'Other plugin options', WP_Style_Guide::PLUGIN_SLUG ) ?></legend>
							<p>
								<label for="plugin-include_license_file">
									<input type="checkbox" id="plugin-include_license_file" name="plugin-include_license_file" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_include_license_file' ) ) ?>>
									<span><?= __( 'Include license in a standalone file', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_dependency">
									<input type="checkbox" id="plugin-has_dependency" name="plugin-has_dependency" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_dependency' ) ) ?>>
									<span><?= __( 'Plugin has dependency to other plugin(s)', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_administration">
									<input type="checkbox" id="plugin-has_administration" name="plugin-has_administration" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_administration' ) ) ?>>
									<span><?= __( 'Plugin contains administration', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
								</label>
							</p>
							<!-- TODO This checkbox need `plugin-has_administration` checked! -->
							<p>
								<label for="plugin-has_options">
									<input type="checkbox" id="plugin-has_options" name="plugin-has_options" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_options' ) ) ?>>
									<span><?= __( 'Plugin has options (will be included new options page into WordPress administration)', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_own_dbtables">
									<input type="checkbox" id="plugin-has_own_dbtables" name="plugin-has_own_dbtables" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_own_dbtables' ) ) ?>>
									<span><?= __( 'Plugin has own database tables', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_localization">
									<input type="checkbox" id="plugin-has_localization" name="plugin-has_localization" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_localization' ) ) ?>>
									<span><?= __( 'Plugin will be localized (create <code>languages</code> folder with <code>POT</code> file)', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
								</label>
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Template -->
				<tr>
					<th scope="row">
						<label for="plugin-template"><?= __( 'Template', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<p style="color: #f30;"><code>XXX</code> &ndash; Finish this!</p>
						<fieldset>
							<legend><?= __( 'Select template for generating plugin source codes' ) ?></legend>
							<div>
								<label title="<?= __( 'Default template', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="default">
									<input type="radio" name="plugin-template" value="none" checked="checked">
									<?= __( 'Default template', WP_Style_Guide::PLUGIN_SLUG ) ?>
								</label>
							</div>
							<div>
								<label title="<?= __( 'WordPress Plugin Boilerplate by Devin Devinson', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="default">
									<input type="radio" name="plugin-template" value="none" checked="checked">
									<?= sprintf( __( '<a href="%s" target="blank">WordPress Plugin Boilerplate</a> by <a href="%s" target="blank">Devin Devinson</a>', WP_Style_Guide::PLUGIN_SLUG ), '', '' ) ?>
								</label>
							</div>

						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
		<input type="submit" name="submit-plugin" value="<?= __( 'Generate code', WP_Style_Guide::PLUGIN_SLUG ) ?>" class="button-primary">
	</form>
</div>