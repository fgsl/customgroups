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
use OCP\Template;
use OCA\CustomGroups\Service\MembershipHelper;

class SettingsPanel implements ISettings {

	private $helper;

	public function __construct(MembershipHelper $helper) {
		$this->helper = $helper;
	}

	/**
	 * @deprecated 
	 * @todo move code to method getForm
	 * @return \OCP\Template
	 */
	public function getPanel() {
		// TODO: cache or add to info.xml ?
		$modules = json_decode(file_get_contents(__DIR__ . '/../js/modules.json'), true);
		$tmpl = new Template('customgroups', 'index');
		$tmpl->assign('modules', $modules);
		$tmpl->assign('canCreateGroups', $this->helper->canCreateGroups());
		return $tmpl;
	}

	public function getPriority() {
		return 0;
	}
	
	/**
	 * @deprecated
	 * @todo move code to method getSection
	 * @return string
	 */
	public function getSectionID() {
		return 'customgroups';
	}
	
	public function getForm()
	{
	    return $this->getPanel();
	}
	
	public function getSection()
	{
	    return $this->getSectionID();
	}
}
