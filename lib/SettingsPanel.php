<?php
/**
 * @author Vincent Petry <pvince81@owncloud.com>
 * @deprecated
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
use OCA\CustomGroups\Service\MembershipHelper;

class SettingsPanel implements ISettings {

	private $helper;

	public function __construct(MembershipHelper $helper) {
		$this->helper = $helper;
	}

	public function getForm() {
		// TODO: cache or add to info.xml ?
                $modules = json_decode(file_get_contents(__DIR__ . '/../js/modules.json'), true);
                $params = [
                                'modules' => $modules,
                                'canCreateGroups' => $this->helper->canCreateGroups(),
                ];

                return new TemplateResponse('customgroups', 'index', $params);

	}

	public function getPriority() {
		return 0;
	}

	public function getSection() {
		return 'customgroups';
	}

}