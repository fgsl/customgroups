<?php
/**
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 *
 * @copyright Copyright (c) 2017, Nextcloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
style ( 'customgroups', 'app' );
style ( 'settings', 'settings' );
script('core', 'oc-backbone');
script('core', 'oc-backbone-webdav');
script ( 'customgroups', 'vendor/handlebars/handlebars');

foreach ($_['modules'] as $module) {
 script('customgroups', $module);
}
?>
<div id="customgroups" class="section"
	data-cancreategroups="<?php p($_['canCreateGroups'] ? 'true' : 'false') ?>">
	<div>
		<h2><?php p($l->t('Custom Groups'));?></h2>
		<div class="groups-container">
			<div>
				<form name="customGroupsCreationForm">
					<div>
						<input name="groupName" placeholder="Nome do grupo"
							autocomplete="off" autocapitalize="off" autocorrect="off"
							type="text"> <input value="Criar grupo" type="submit">
					</div>
				</form>

				<table class="grid hidden">
					<thead>
						<tr>
							<th></th>
							<th>Grupo</th>
							<th>Seu papel</th>
							<th></th>
						</tr>
					</thead>
					<tbody class="group-list">
					</tbody>
				</table>
				<div class="empty">Atualmente, não existem grupos definidos pelo
					usuário</div>
				<div class="loading hidden" style="height: 50px"></div>
			</div>
		</div>
		<div class="members-container sidebar disappear" id="app-sidebar"></div>

	</div>
</div>



<p>
	<input type="checkbox" name="only_subadmin_can_create"
		id="onlySubAdminCanCreate" class="checkbox" value="1"
		<?php if ($_['onlySubAdminCanCreate']) print_unescaped('checked="checked"'); ?> />
	<label for="onlySubAdminCanCreate">
			<?php p($l->t('Only group admins are allowed to create custom groups'));?>
		</label>
</p>
<p>
	<input type="checkbox" name="allow_duplicate_names"
		id="allowDuplicateNames" class="checkbox" value="1"
		<?php if ($_['allowDuplicateNames']) print_unescaped('checked="checked"'); ?> />
	<label for="allowDuplicateNames">
			<?php p($l->t('Allow creating multiple groups with the same name'));?>
		</label>
</p>
</div>


