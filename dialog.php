<?php
require_once('../../common.php');
?>
<label class="header"><i class="fas fa-heartbeat"></i><?php i18n("Winddown"); ?></label>
<hr>
<table class="settings">
	<tr>
		<td><?php i18n("Enabled"); ?></td>
		<td>
			<select class="setting" data-setting="winddown.enabled">
				<option value="true" selected><?php i18n("True") ?></option>
				<option value="false"><?php i18n("False") ?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td><?php i18n("Rest Interval"); ?></td>
		<td>
			<select class="setting" data-setting="winddown.restTime">
				<option value="15"><?php i18n("%{interval}% Minutes", array("interval" => 15)) ?></option>
				<option value="30" selected><?php i18n("%{interval}% Minutes", array("interval" => 30)) ?></option>
				<option value="45"><?php i18n("%{interval}% Minutes", array("interval" => 45)) ?></option>
				<option value="60"><?php i18n("%{interval}% Minutes", array("interval" => 60)) ?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td><?php i18n("Fade Period"); ?></td>
		<td>
			<select class="setting" data-setting="winddown.fadeTime">
				<option value="1"><?php i18n("%{interval}% Minute", array("interval" => 1)) ?></option>
				<option value="3"><?php i18n("%{interval}% Minutes", array("interval" => 3)) ?></option>
				<option value="5" selected><?php i18n("%{interval}% Minutes", array("interval" => 5)) ?></option>
				<option value="10"><?php i18n("%{interval}% Minutes", array("interval" => 10)) ?></option>
			</select>
		</td>

	</tr>
</table>