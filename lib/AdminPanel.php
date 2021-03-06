<?php
/**
 * @author Vincent Petry <pvince81@owncloud.com>
 *
 * @copyright Copyright (c) 2017, ownCloud GmbH
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

namespace OCA\CustomGroups;

use OCP\Settings\ISettings;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;

class AdminPanel implements ISettings {

	/**
	 * @var IConfig
	 */
	private $config;

	public function __construct(IConfig $config) {
		$this->config = $config;
	}

	public function getForm() {
        $restrictToSubadmins = $this->config->getAppValue('customgroups', 'only_subadmin_can_create', 'false') === 'true';
        $allowDuplicateNames = $this->config->getAppValue('customgroups', 'allow_duplicate_names', 'false') === 'true';
                $params = [
                                'onlySubAdminCanCreate' => $restrictToSubadmins,
                                'allowDuplicateNames' => $allowDuplicateNames,
                ];

                return new TemplateResponse('customgroups', 'admin', $params);
	}

	public function getPriority() {
		return 0;
	}

	public function getSection() {
		return 'sharing';
	}

}