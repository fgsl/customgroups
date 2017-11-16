<?php
/** @var \OCP\IL10N $l */
/** @var array $_ */
script('customgroups', 'settings-admin');
?>

<div id="customgroups-admin" class="section">
	<h2><?php p($l->t('Custom Groups'));?></h2>

	<p>
		<input type="checkbox" name="only_subadmin_can_create" id="onlySubAdminCanCreate" class="checkbox"
			   value="1" <?php if ($_['onlySubAdminCanCreate']) print_unescaped('checked="checked"'); ?> />
		<label for="onlySubAdminCanCreate">
			<?php p($l->t('Only group admins are allowed to create custom groups'));?>
		</label>
	</p>
	<p>
		<input type="checkbox" name="allow_duplicate_names" id="allowDuplicateNames" class="checkbox"
			   value="1" <?php if ($_['allowDuplicateNames']) print_unescaped('checked="checked"'); ?> />
		<label for="allowDuplicateNames">
			<?php p($l->t('Allow creating multiple groups with the same name'));?>
		</label>
	</p>
</div>