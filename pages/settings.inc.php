<?php

$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func = rex_request('func', 'string');
$use_framework = rex_request('use_framework', 'string');
$which_framework = rex_request('which_framework', 'string');

$config_file = $REX['INCLUDE_PATH'] . '/addons/rex_mobile/config.inc.php';

if ($func == 'update')
{
  $REX['ADDON']['rex_mobile']['use_framework'] = $use_framework;
  $REX['ADDON']['rex_mobile']['which_framework'] = $which_framework;
  $content = '
$REX[\'ADDON\'][\'rex_mobile\'][\'use_framework\'] = \''.$use_framework.'\';
$REX[\'ADDON\'][\'rex_mobile\'][\'which_framework\'] = \''.$which_framework.'\';
';
  if(rex_replace_dynamic_contents($config_file, $content) !== false)
    echo rex_info($I18N->msg('rex_mobile_config_saved'));
  else
    echo rex_warning($I18N->msg('rex_mobile_config_not_saved'));
}
if(!rex_is_writable($config_file))
  echo rex_warning($I18N->msg('rex_mobile_error_notwriteable', $config_file));

?>
<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('rex_mobile_menu_settings'); ?></h2>
	<div id="rex-addon-editmode" class="rex-form">
		<form action="index.php" method="post">
		    <input type="hidden" name="page" value="<?php echo $page; ?>" />
		    <input type="hidden" name="subpage" value="<?php echo $subpage; ?>" />
		    <input type="hidden" name="func" value="update" />
			<fieldset class="rex-form-col-1">
				<legend><?php echo $I18N->msg('rex_mobile_use_framework'); ?></legend>
				<div class="rex-form-wrapper">
					<div class="rex-form-checkboxes">
    	           		<div class="rex-form-checkboxes-wrapper">
							<p class="rex-form-checkbox rex-form-label-right">					
								<?php
									if($REX['ADDON']['rex_mobile']['use_framework'] == '1')
									{
								?>
								<input class="rex-form-checkbox" type="checkbox" checked="checked" name="use_framework" id="use_framework" value="1" />
								<?php
									}
									else {
								?>
								<input class="rex-form-checkbox" type="checkbox" name="use_framework" id="use_framework" value="1" />
								<?php
									}
								?>
								<label for="use_framework"><?php echo $I18N->msg('rex_mobile_use_framework'); ?></label>
							</p>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset class="rex-form-col-1">
				<legend><?php echo $I18N->msg('rex_mobile_which_framework'); ?></legend>
				<div class="rex-form-wrapper">
					<div class="rex-form-row">
            			<p class="rex-form-radio rex-form-label-right">
							<?php
								if($REX['ADDON']['rex_mobile']['which_framework'] == 'bootstrap') {
							?>
							<input type="radio" checked="checked" name="which_framework" id="which_framework" value="bootstrap" />
							<?php
								}
								else {
							?>
							<input type="radio" name="which_framework" id="use_bootstrap" value="bootstrap" />
							<?php
								}
							?>
							<label for="use_bootstrap"><?php echo $I18N->msg('rex_mobile_use_bootstrap'); ?></label>
						</p>
					</div>
					<div class="rex-form-row">
            			<p class="rex-form-radio rex-form-label-right">
							<?php
								if($REX['ADDON']['rex_mobile']['which_framework'] == 'bootstrap3') {
							?>
							<input type="radio" checked="checked" name="which_framework" id="which_framework" value="bootstrap3" />
							<?php
								}
								else {
							?>
							<input type="radio" name="which_framework" id="use_bootstrap" value="bootstrap3" />
							<?php
								}
							?>
							<label for="use_bootstrap"><?php echo $I18N->msg('rex_mobile_use_bootstrap3'); ?></label>
						</p>
					</div>					
					<div class="rex-form-row">
            			<p class="rex-form-radio rex-form-label-right">
							<?php
								if($REX['ADDON']['rex_mobile']['which_framework'] == 'foundation') {
							?>
							<input type="radio" checked="checked" name="which_framework" id="which_framework" value="foundation" />
							<?php
								}
								else {
							?>
							<input type="radio" name="which_framework" id="use_foundation" value="foundation" />
							<?php
								}
							?>
							<label for="use_foundation"><?php echo $I18N->msg('rex_mobile_use_foundation'); ?></label>
						</p>
					</div>
				</div>
				<div class="rex-form-row">
					<p class="rex-form-col-a rex-form-submit">
						<input class="rex-form-submit" type="submit" name="btn_save" value="<?php echo $I18N->msg('rex_mobile_config_btn_save'); ?>" />
			</fieldset>
		</form>
	</div>
</div>