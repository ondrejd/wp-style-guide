<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Forms' ); ?></h2>

	<h3 class="screen-reader-text"><?php esc_html_e( 'List of Contents' ); ?></h3>
	<ul class="subsubsub">
		<li><b>Contents:</b> </li>
		<li><a href="#form">Form table</a> | </li>
		<li><a href="#tr-text_input">Text input</a> | </li>
		<li><a href="#tr-select">Select</a> | </li>
		<li><a href="#tr-multi_select">Multiple Select</a> | </li>
		<li><a href="#tr-radio_buttons">Radio Buttons</a> | </li>
		<li><a href="#tr-checkbox">Checkbox</a> | </li>
		<li><a href="#tr-checkbox_array">Checkbox Array</a> | </li>
		<li><a href="#tr-html5">Fieldset and HTML5 Elements</a> | </li>
		<li><a href="#tr-datetime">Date Time Elements</a> | </li>
		<li><a href="#tr-others">Other Elements</a> | </li>
		<li><a href="#tr-buttons">Buttons</a></li>
	</ul>

	<form id="form">
		<table class="form-table">
			<tbody>
				<tr id="tr-form_table">
					<th>
						<label>Form table</label>
					</th>
					<td>
						<p>Here is minor excerpt with the form table as is used in <b>WordPress</b> options pages.</p>
						<table class="form-table">
							<tbody>
								<tr>
									<th scope="row">
										<label for="test-input-02"><?= __('Test', 'textdomain')?></label>
									</th>
									<td>
										<fieldset>
											<p>
												<label for="test-input-02"><?= __('Some large and important description for the first input.', 'textdomain')?></label>
												<input type="text" name="test-input-02" id="test-input-02" class="regular-text">
											</p>
											<p class="description"><?= __('Minor or less important description for the first input.', 'textdomain')?></p>
										</fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="input-test-name"><?= __('Shop name', 'textdomain')?></label>
									</th>
									<td>
										<fieldset>
											<legend class="screen-reader-text">
												<span><?= __('Name of one-page shop', 'textdomain')?></span>
											</legend>
											<p>
												<label title="<?= __('Same as whole WordPress site')?>" data-value="inherited">
													<input type="radio" name="input-test-name" value="inherited" checked="checked">
													<?= __('Same as whole WordPress site', 'textdomain')?>
													<span class="description"><?= sprintf(__(' (Same as is inserted <a href="%1s">here</a>&hellip;)', 'textdomain'), '#')?></span>
												</label>
											</p>
											<p>
												<label title="<?= __('Custom: ', 'textdomain')?>" data-value="custom">
													<input type="radio" name="input-test-name" value="custom">
													<?= __('Custom: ', 'textdomain')?>
													<span class="screen-reader-text"><?= __('insert name of shop', 'textdomain')?></span>
													<label class="screen-reader-text" for="input-test-name_custom"><?= __('Name of one-page shop', 'textdomain')?></label>
													<input type="text" name="input-test-name_custom" id="input-test-name_custom" value="" class="regular-text" placeholder="<?= __('Enter name for your new one-page shop&hellip;', 'textdomain')?>" disabled="disabled">
												</label>
											</p>
										</fieldset>
									</td>
								</tr>
								<!-- ... -->
							</tbody>
						</table>
    					<script type="text/javascript">
jQuery(document).on("ready", function () {
	jQuery("input[name='input-test-name']").parent().on(
		"click", 
		function() {
			if (jQuery(this).data('value') == "custom") {
				jQuery("#input-test-name_custom")
					.prop("disabled", false)
					.removeProp("disabled").focus();
			} else {
				jQuery("#input-test-name_custom")
					.prop("disabled", true);
			}
		}
	);
});
						</script>
						<pre><code class="language-markup">
&lt;table class="form-table"&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th scope="row"&gt;
				&lt;label for="test-input-02"&gt;&lt;?= __('Test', 'textdomain')?&gt;&lt;/label&gt;
			&lt;/th&gt;
			&lt;td&gt;
				&lt;fieldset&gt;
					&lt;p&gt;
						&lt;label for="test-input-02"&gt;
							&lt;?= __('Some large and important description for the first input.', 'textdomain')?&gt;
						&lt;/label&gt;
						&lt;input type="text" name="test-input-02" id="test-input-02" class="regular-text"&gt;
					&lt;/p&gt;
					&lt;p class="description"&gt;
						&lt;?= __('Minor or less important description for the first input.', 'textdomain')?&gt;
					&lt;/p&gt;
				&lt;/fieldset&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th scope="row"&gt;
				&lt;label for="input-test-name"&gt;&lt;?= __('Shop name', 'textdomain')?&gt;&lt;/label&gt;
			&lt;/th&gt;
			&lt;td&gt;
				&lt;fieldset&gt;
					&lt;legend class="screen-reader-text"&gt;
						&lt;span&gt;&lt;?= __('Name of one-page shop', 'textdomain')?&gt;&lt;/span&gt;
					&lt;/legend&gt;
					&lt;p&gt;
						&lt;label title="&lt;?= __('Same as whole WordPress site')?&gt;" data-value="inherited"&gt;
							&lt;input type="radio" name="input-test-name" value="inherited" checked="checked"&gt;
							&lt;?= __('Same as whole WordPress site', 'textdomain')?&gt;
							&lt;span class="description"&gt;
								&lt;?= sprintf(__(
									' (Same as is inserted &lt;a href="%1s"&gt;here&lt;/a&gt;&hellip;)', 
									'textdomain'
								), '#')?&gt;
							&lt;/span&gt;
						&lt;/label&gt;
					&lt;/p&gt;
					&lt;p&gt;
						&lt;label title="&lt;?= __('Custom: ', 'textdomain')?&gt;" data-value="custom"&gt;
							&lt;input type="radio" name="input-test-name" value="custom"&gt;
							&lt;?= __('Custom: ', 'textdomain')?&gt;
							&lt;span class="screen-reader-text"&gt;
								&lt;?= __('insert name of shop', 'textdomain')?&gt;
							&lt;/span&gt;
							&lt;label class="screen-reader-text" for="input-test-name_custom"&gt;
								&lt;?= __('Name of one-page shop', 'textdomain')?&gt;
							&lt;/label&gt;
							&lt;input type="text" name="input-test-name_custom" id="input-test-name_custom" 
							          value="" class="regular-text" disabled="disabled" 
							          placeholder="&lt;?= __('Enter name&hellip;', 'textdomain')?&gt;"&gt;
						&lt;/label&gt;
					&lt;/p&gt;
				&lt;/fieldset&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;!-- ... --&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;script type="text/javascript"&gt;
jQuery(document).on('ready', function () {
	jQuery('input[name="input-test-name"]').parent().on(
		'click', 
		function() {
			if (jQuery(this).data('value') == 'custom') {
				jQuery('#input-test-name_custom').prop('disabled', false).removeProp('disabled').focus();
			} else {
				jQuery('#input-test-name_custom').prop('disabled", true);
			}
		}
	);
});
&lt;/script&gt;
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-text_input"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-text">Text input</label>
					</th>
					<td>
						<input type="text" name="input-text" placeholder="Text" /><br />
						<pre><code class="language-markup">
&lt;input type="text" name="input-text" placeholder="Text" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-select"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-text">Select</label>
					</th>
					<td>
						<select name="select">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
						</select>
						<pre><code class="language-markup">
&lt;select name="select">
  &lt;option>Option 1&lt;/option>
  &lt;option>Option 2&lt;/option>
  &lt;option>Option 3&lt;/option>
&lt;/select>
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-multi_select"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="multi-select">Multiple Select</label>
					</th>
					<td>
						<select name="multi-select" multiple="multiple">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
							<option>Option 6</option>
						</select>
						<pre><code class="language-markup">
&lt;select name="multi-select" multiple="multiple">
  &lt;option>Option 1&lt;/option>
  &lt;option>Option 2&lt;/option>
  &lt;option>Option 3&lt;/option>
  &lt;option>Option 4&lt;/option>
  &lt;option>Option 5&lt;/option>
  &lt;option>Option 6&lt;/option>
&lt;/select>
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-radio_buttons"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="radio-buttons">Radio Buttons</label>
					</th>
					<td>
						<input type="radio" name="radio-buttons" value="option-1"/> Option 1 <br />
						<input type="radio" name="radio-buttons" value="option-2"/> Option 2 <br />
						<input type="radio" name="radio-buttons" value="option-3"/> Option 3 <br />
						<input type="radio" name="radio-buttons" value="option-4"/> Option 4 <br />
						<pre><code class="language-markup">
&lt;input type="radio" name="radio-buttons" value="option-1" /> Option 1
&lt;input type="radio" name="radio-buttons" value="option-2" /> Option 2
&lt;input type="radio" name="radio-buttons" value="option-3" /> Option 3
&lt;input type="radio" name="radio-buttons" value="option-4" /> Option 4
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-checkbox"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-checkbox">Checkbox</label>
					</th>
					<td>
						<input type="checkbox" name="input-checkbox" /> Option 1<br />
						<pre><code class="language-markup">
&lt;input type="checkbox" name="input-checkbox"/> Option 1
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-checkbox_array"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="checkbox-array">Checkbox Array</label>
					</th>
					<td>
						<input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1<br />
						<input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2<br />
						<input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3<br />
						<pre><code class="language-markup">
&lt;input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1
&lt;input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2
&lt;input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-html5"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-fieldset">Fieldset and <br />HTML5 Elements</label>
					</th>
					<td>
						<fieldset>
							<legend>Legend</legend>
							<input type="email" placeholder="Email" /> Email<br />
							<input type="search" placeholder="Search" /> Search<br />
							<input type="tel" placeholder="Telephone" /> Telephone<br />
							<input type="text" placeholder="Text" /> Text<br />
							<input type="url" placeholder="URL" /> URL<br />
						</fieldset>
						<pre><code class="language-markup">
&lt;fieldset>
  &lt;legend>Legend&lt;/legend>
  &lt;input type="email" placeholder="Email" /> Email
  &lt;input type="search" placeholder="Search" /> Search
  &lt;input type="tel" placeholder="Telephone" /> Telephone
  &lt;input type="text" placeholder="text" /> Text
  &lt;input type="url" placeholder="URL" /> URL
&lt;/fieldset>
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-datetime"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-time">Date Time Elements</label>
					</th>
					<td>
						<p>If you creating date time inputs for form for editing <em>custom-</em>post type you can use <strong>WordPress</strong> function <a href="https://developer.wordpress.org/reference/functions/touch_time/" target="blank"><code>touch_time</code></a> (<strong>Warning:</strong> This function can be used only on <code>post.php</code> or <code>post-new.php</code> pages!):</p>
						<pre><code class="language-php">&lt;?php @touch_time(false, false, false, true);?&gt;</code></pre>
						<?php 
						@touch_time(false, false, false, true);
						?>
						<p>This will create output like this:</p>
						<pre><code class="language-markup">
&lt;div class="timestamp-wrap"&gt;
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Den&lt;/span&gt;
		&lt;input name="jj" value="27" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;.
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Měsíc&lt;/span&gt;
		&lt;select name="mm"&gt;
			&lt;option value="01" data-text="Jan"&gt;01 - Jan&lt;/option&gt;
			&lt;option value="02" data-text="Feb" selected="selected"&gt;02 - Feb&lt;/option&gt;
			&lt;option value="03" data-text="Mar"&gt;03 - Mar&lt;/option&gt;
			&lt;option value="04" data-text="Apr"&gt;04 - Apr&lt;/option&gt;
			&lt;option value="05" data-text="May"&gt;05 - May&lt;/option&gt;
			&lt;option value="06" data-text="Jun"&gt;06 - Jun&lt;/option&gt;
			&lt;option value="07" data-text="Jul"&gt;07 - Jul&lt;/option&gt;
			&lt;option value="08" data-text="Aug"&gt;08 - Aug&lt;/option&gt;
			&lt;option value="09" data-text="Sep"&gt;09 - Sep&lt;/option&gt;
			&lt;option value="10" data-text="Oct"&gt;10 - Oct&lt;/option&gt;
			&lt;option value="11" data-text="Nov"&gt;11 - Nov&lt;/option&gt;
			&lt;option value="12" data-text="Dec"&gt;12 - Dec&lt;/option&gt;
		&lt;/select&gt;
	&lt;/label&gt; 
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Rok&lt;/span&gt;
		&lt;input name="aa" value="2016" size="4" maxlength="4" autocomplete="off" type="text"&gt;
	&lt;/label&gt; @ 
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Hodiny&lt;/span&gt;
		&lt;input name="hh" value="15" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;:
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Minuty&lt;/span&gt;
		&lt;input name="mn" value="23" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;
&lt;/div&gt;
						</code></pre>
						<p>Otherwise there are simple date time inputs available:</p>
						Date: <input name="input-date" type="date" /><br />
						Month: <input name="input-month" type="month" /> <br />
						Week: <input name="input-week" type="week" /><br />
						Time: <input name="input-time" type="time" /><br />
						Local Date and Time: <input name="input-datetime-local" type="datetime-local" />
						<pre><code class="language-markup">
Date: &lt;input id="input-date" name="input-date" type="date" />
Month: &lt;input id="input-month" name="input-month" type="month" />
Week: &lt;input id="input-week" name="input-week" type="week" />
Time: &lt;input id=="input-time" name="input-time" type="time" />
Local Date and Time: &lt;input name="input-datetime-local" type="datetime-local" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-others"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-time">Other Elements</label>
					</th>
					<td>
						Number: <input name="input-number" type="number" min="0" max="20" /><br />
						Range: <input name="input-range" type="range" /><br />
						Color: <input name="input-color" type="color" /><br />
						<pre><code class="language-markup">
Number: &lt;input name="input-number" type="number" min="0" max="20" />
Range: &lt;input name="input-range" type="range" />
Color: &lt;input name="input-color" type="color" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
				<tr id="tr-buttons"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-time">Buttons</label>
					</th>
					<td>
						<input type="submit" value="Submit Input" class="button" /><br /><br />
						<input type="button" value="Secondary Button" class="button-secondary" /><br /><br />
						<input type="button" value="Primary Button" class="button-primary" />
						<pre><code class="language-markup">
&lt;input type="submit" value="Submit Input" class="button" />
&lt;input type="button" value="Secondary Button" class="button-secondary" />
&lt;input type="button" value="Primary Button" class="button-primary" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright">Back to top</a></p>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

</div><!-- .wrap -->