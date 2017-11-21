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

style('customgroups', 'app');
style('settings', 'settings');
script('core', 'oc-backbone');
script('customgroups', 'oc-backbone-webdav');
script('customgroups', 'vendor/handlebars/handlebars');

$modules = [
	"App",
	"MemberModel",
	"MembersCollection",
	"MembersInputView",
	"MembersView",
	"GroupModel",
	"GroupsCollection",
	"GroupsView",
	"templates/app.handlebars",
	"templates/list.handlebars",
	"templates/listItem.handlebars",
	"templates/membersList.handlebars",
	"templates/membersListHeader.handlebars",
	"templates/membersListItem.handlebars",
	"templates/membersInput.handlebars",
	"templates/membersInputItem.handlebars"
];

foreach ($modules as $module) {
	script('customgroups', $module);
}
?>

<div id="customgroups" class="section" data-cancreategroups="<?php p($_['canCreateGroups'] ? 'true' : 'false') ?>">