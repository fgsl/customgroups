<?php
/**
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 *
 * @copyright Copyright (c) 2017, Nextcloud GmbH.
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

/*
 * @todo remove
$app = new \OCA\CustomGroups\Application();
$app->registerGroupBackend();
$app->registerNotifier();

if(!defined('PHPUNIT') && !\OC::$CLI) {
   $pathInfo = \OC::$server->getRequest()->getPathInfo();
   if (strstr($pathInfo, 'settings/') !== false) {
      // Temporarily fix icon until custom icons are supported
      \OCP\Util::addStyle('customgroups', 'icon');
   }
 }
*/
\OC::$server->getNavigationManager()->add(function () {
	$urlGenerator = \OC::$server->getURLGenerator();
	return [
			// the string under which your app will be referenced in Nextcloud
			'id' => 'customgroups',

			// sorting weight for the navigation. The higher the number, the higher
			// will it be listed in the navigation
			'order' => 10,

			// the route that will be shown on startup
			'href' => $urlGenerator->linkToRoute('customgroups.page.index'),

			// the icon that will be shown in the navigation
			// this file needs to exist in img/
			'icon' => $urlGenerator->imagePath('customgroups', 'icon.svg'),

			// the title of your application. This will be used in the
			// navigation or on the settings page of your app
			'name' => \OC::$server->getL10N('customgroups')->t('Custom Groups'),
	];
});

	// execute OCA\MyApp\BackgroundJob\Task::run when cron is called
	\OC::$server->getJobList()->add('OCA\CustomGroups\BackgroundJob\Task');

	// execute OCA\MyApp\Hooks\User::deleteUser before a user is being deleted
	\OCP\Util::connectHook('OC_User', 'pre_deleteUser', 'OCA\CustomGroups\Hooks\User', 'deleteUser');
