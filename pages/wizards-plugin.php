<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php esc_html_e( 'Wizards - Plugin Wizard' ); ?></h1>

	<form id="plugin-wizard">
		<!-- <h3>Main options</h3> -->

		<table class="form-table">
			<tbody>
				<!-- Name -->
				<tr>
					<th scope="row">
						<label for="plugin-name"><?= __( 'Name' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-name" id="plugin-name" class="regular-text" placeholder="<?= __( 'Enter name of your plugin' )?>">
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Identifier -->
				<tr>
					<th scope="row">
						<label for="plugin-identifier"><?= __( 'Identifier' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-identifier" id="plugin-identifier" class="regular-text" placeholder="<?= __( 'Enter identifier of your plugin' )?>">
							</p>
							<p class="description"><?= ( '<b>Identifier</b> could be derrived from plugin\'s name and can NOT contains spaces, tabs and other control or special characters.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Description -->
				<tr>
					<th scope="row">
						<label for="plugin-description"><?= __( 'Description' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-description"><?= __( 'Short description:' )?></label><br>
								<textarea name="plugin-description" id="plugin-description" class="long-text" placeholder="<?= __( 'Enter short description of your plugin' )?>" cols="72" rows="5"></textarea>
							</p>
							<p>
								<label for="plugin-description_full"><?= __( 'Full description:' )?></label><br>
								<textarea name="plugin-description_full" id="plugin-description_full" class="long-text" placeholder="<?= __( 'Enter full description of your plugin' )?>" cols="72" rows="10"></textarea>
							</p>
							<p class="description"><?= __( 'Both descriptions are used in <code>readme.txt</code> file.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Tags -->
				<tr>
					<th scope="row">
						<label for="plugin-tags"><?= __( 'Tags' )?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Enter list of tags separated by comma.' )?></p>
							<p>
								<input type="text" name="plugin-tags" id="plugin-tags" class="regular-text" placeholder="<?= __( 'Enter comma separated list of tags' )?>" style="width: 695px;">
							</p>
							<p class="description"><?= __( 'For example: <code>red,black,blue</code>.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Version -->
				<tr>
					<th scope="row">
						<label for="plugin-version"><?= __( 'Version' )?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Enter current version of the plugin, minimal required WordPress version, maximal version of WordPress on which was plugin tested and plugin\'s version which is considered to be stable.' )?></p>
							<p>
								<label for="plugin-version" style="width: 130px;"><?= __( 'Current version:' )?></label>
								<input type="text" name="plugin-version" id="plugin-version" style="width: 120px;">
							</p>
							<p>
								<label for="plugin-required_at_least" style="width: 130px;"><?= __( 'Required at least:' )?></label>
								<input type="text" name="plugin-required_at_least" id="plugin-required_at_least" style="width: 120px;">
							</p>
							<p>
								<label for="plugin-tested_up_to" style="width: 130px;"><?= __( 'Tested up to:' )?></label>
								<input type="text" name="plugin-tested_up_to" id="plugin-tested_up_to" style="width: 120px;">
							</p>
							<p>
								<label for="plugin-stable_tag" style="width: 130px;"><?= __( 'Stable tag:' )?></label>
								<input type="text" name="plugin-stable_tag" id="plugin-stable_tag" style="width: 120px;">
							</p>
							<p class="description"><?= __( 'Some valid versions as an example: <b>3.4.0</b>, <b>4.4</b>, <b>1.2.1</b> etc.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Author -->
				<tr>
					<th scope="row">
						<label for="plugin-author"><?= __( 'Author' )?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Enter author\'s name and valid homepage\'s URL.' )?></p>
							<p>
								<label for="plugin-author" style="width: 130px;"><?= __( 'Author:' )?></label>
								<input type="text" name="plugin-author" id="plugin-author" class="regular-text" placeholder="<?= __( 'Enter author\'s name' )?>">
							</p>
							<p>
								<label for="plugin-author_uri" style="width: 130px;"><?= __( 'URI:' )?></label>
								<input type="text" name="plugin-author_uri" id="plugin-author_uri" class="regular-text" placeholder="<?= __( 'Enter URI of author\'s homepage' )?>">
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Contributors -->
				<tr>
					<th scope="row">
						<label for="plugin-contributors"><?= __( 'Contributors' )?></label>
					</th>
					<td>
						<fieldset>
							<p><?= sprintf( __( 'Comma separated list of contributors.' ), '<a href="https://wordpress.org/" target="blank">', '</a>' )?></p>
							<p>
								<input type="text" name="plugin-contributors" id="plugin-contributors" class="regular-text" placeholder="<?= __( 'Enter comma separated list of contributors' )?>" style="width: 695px;">
							</p>
							<p class="description"><?= __( 'For example: <code>joed,jimb,janed</code>.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- License -->
				<!-- TODO Add select with the most used licenses (but keep possibility to enter own custom license)! -->
				<!-- TODO Don't forget `LICENSE` file in generated project files! -->
				<tr>
					<th scope="row">
						<label for="plugin-author"><?= __( 'License' )?></label>
					</th>
					<td>
						<fieldset>
							<legend>
								<span><?= __( 'Either select or enter name of license and its URL. You can also select no license but it is not recommended.' )?></span>
							</legend>
							<div>
								<label title="<?= __( 'Žádná licence' )?>" class="license">
									<input type="radio" name="plugin-license" value="none" checked="checked">
									<?= __( 'Žádná licence' )?>
								</label>
							</div>
							<div>
								<label title="<?= __( 'Vybraný typ:' )?>" class="license">
								<input type="radio" name="plugin-license" value="license_custom">
								<?= __( 'Vybraný typ:' )?>
								<div style="padding-left: 25px;" class="license_custom">
									<div class="inputs-subarea">
										<span class="screen-reader-text"><?= __( 'vyberte licenci' )?></span>
										<label class="screen-reader-text" for="plugin-license_select"><?= __( 'Typy licencí' )?></label>
										<select name="plugin-license_select" id="plugin-license_select" disabled="disabled">
											<option value="Apache License 2.0" data-license_url="http://www.apache.org/licenses/LICENSE-2.0"><?= __( 'Apache License 2.0' )?></option>
											<option value="GPL 2.0" data-license_url="http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt"><?= __( 'GPL 2.0' )?></option>
											<option value="GPL 3.0" data-license_url="http://www.gnu.org/licenses/gpl-3.0.txt"><?= __( 'GPL 3.0' )?></option>
											<option value="MPL 2.0" data-license_url="https://www.mozilla.org/MPL/2.0/"><?= __( 'MPL 2.0' )?></option>
											<option value="MIT License" data-license_url="https://opensource.org/licenses/MIT"><?= __( 'MIT License' )?></option>
										</select>
									</div>
								</div>
							</div>
							<div>
								<label title="<?= __( 'Vlastní typ:' )?>" class="license">
								<input type="radio" name="plugin-license" value="license_other">
								<?= __( 'Jiný typ:' )?>
								<div style="padding-left: 25px;" class="license_other">
									<div class="inputs-subarea">
										<p>
											<label for="plugin-license_other_name" style="width: 130px;"><?= __( 'License:' )?></label>
											<input type="text" name="plugin-license_other_name" id="plugin-license_other_name" class="regular-text" placeholder="<?= __( 'Enter license\'s name' )?>" disabled="disabled">
										</p>
										<p>
											<label for="plugin-license_other_uri" style="width: 130px;"><?= __( 'URI:' )?></label>
											<input type="text" name="plugin-license_other_uri" id="plugin-license_other_uri" class="regular-text" placeholder="<?= __( 'Enter URI of license' )?>" disabled="disabled">
										</p>
										<p class="description"><?= __( 'For example: <code>Mozilla Public License 2.0</code> and <code>https://www.mozilla.org/MPL/2.0/</code>.' )?></p>
									</div>
								</div>
							</div>
						</fieldset>
					</td>
				</tr>
				<!-- Donate Link -->
				<tr>
					<th scope="row">
						<label for="plugin-donate_link"><?= __( 'Donate Link' )?></label>
					</th>
					<td>
						<fieldset>
							<p><?= __( 'Valid URL of link with donation page. Leave blank if you don\'t have one.' )?></p>
							<p>
								<input type="text" name="plugin-donate_link" id="plugin-donate_link" class="regular-text" placeholder="<?= __( 'Enter donate link' )?>" style="width: 695px;">
							</p>
						</fieldset>
					</td>
				</tr>
				<!-- Installation -->
				<tr>
					<th scope="row">
						<label for="plugin-installation"><?= __( 'Installation' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-installation"><?= __( 'Installation instructions:' )?></label><br>
								<textarea name="plugin-installation" id="plugin-installation" class="long-text" placeholder="<?= __( 'Enter plugin installation instructions' )?>" cols="72" rows="10"><?= WP_Style_Guide::get_option( 'default_install_text' )?></textarea>
							</p>
							<p class="description"><?= __( 'Installation instructions are part of <code>readme.txt</code> file.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- FAQ -->
				<tr>
					<th scope="row">
						<label for="plugin-faq"><?= __( 'FAQ' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-faq"><?= __( 'Frequently asked questions:' )?></label><br>
								<textarea name="plugin-faq" id="plugin-faq" class="long-text" placeholder="<?= __( 'Enter frequently asked questions' )?>" cols="72" rows="10"><?= WP_Style_Guide::get_option( 'default_faq_text' )?></textarea>
							</p>
							<p class="description"><?= __( 'Frequently asked questions are part of <code>readme.txt</code> file.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- TODO Screenshots -->
				<!-- Change Log -->
				<tr>
					<th scope="row">
						<label for="plugin-changelog"><?= __( 'Change Log' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<textarea name="plugin-changelog" id="plugin-changelog" class="long-text" placeholder="<?= __( 'Enter change log of your plugin' )?>" cols="72" rows="10"><?= WP_Style_Guide::get_option( 'default_changelog_text' )?></textarea>
							</p>
							<p class="description"><?= __( 'Change log is a part of <code>readme.txt</code> file.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Upgrade notice -->
				<tr>
					<th scope="row">
						<label for="plugin-upgrade"><?= __( 'Upgrade notice' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<textarea name="plugin-upgrade" id="plugin-upgrade" class="long-text" placeholder="<?= __( 'Enter upgrade notice' )?>" cols="72" rows="10"></textarea>
							</p>
							<p class="description"><?= __( 'Upgrade notice is a part of <code>readme.txt</code> file. When starting new plugin this field will be probably empty.' )?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Options -->
				<tr>
					<th scope="row">
						<label for="plugin-has_dependency"><?= __( 'Options' )?></label>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text"><?= __( 'Other plugin options' )?></legend>
							<p>
								<label for="plugin-include_license_file">
									<input type="checkbox" id="plugin-include_license_file" name="plugin-include_license_file" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_include_license_file' ) )?>>
									<span><?= __( 'Include license in a standalone file' )?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_dependency">
									<input type="checkbox" id="plugin-has_dependency" name="plugin-has_dependency" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_dependency' ) )?>>
									<span><?= __( 'Plugin has dependency to other plugin(s)' )?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_administration">
									<input type="checkbox" id="plugin-has_administration" name="plugin-has_administration" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_administration' ) )?>>
									<span><?= __( 'Plugin contains administration' )?></span>
								</label>
							</p>
							<!-- TODO This checkbox need `plugin-has_administration` checked! -->
							<p>
								<label for="plugin-has_options">
									<input type="checkbox" id="plugin-has_options" name="plugin-has_options" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_options' ) )?>>
									<span><?= __( 'Plugin has options (will be included new options page into WordPress administration' )?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_own_dbtables">
									<input type="checkbox" id="plugin-has_own_dbtables" name="plugin-has_own_dbtables" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_own_dbtables' ) )?>>
									<span><?= __( 'Plugin has options (will be included new options page into WordPress administration' )?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_localization">
									<input type="checkbox" id="plugin-has_localization" name="plugin-has_localization" <?= checked( ( bool ) WP_Style_Guide::get_option( 'default_has_localization' ) )?>>
									<span><?= __( 'Plugin will be localized (create <code>languages</code> folder with <code>POT</code> file)' )?></span>
								</label>
							</p>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>