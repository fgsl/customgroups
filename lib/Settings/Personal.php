<?php
/**
 * @copyright Copyright (c) 2017 Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 *
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\CustomGroups\Settings;


use OCP\Settings\ISettings;
use OCP\AppFramework\Http\TemplateResponse;
use OCA\CustomGroups\Service\MembershipHelper;

class Personal implements ISettings {
	private $helper;
	
	public function __construct(MembershipHelper $helper) {
		$this->helper = $helper;
	}
	
	public function getForm() {
		// TODO: cache or add to info.xml ?
		$modules = json_decode(file_get_contents(__DIR__ . '/../js/modules.json'), true);
		$parameters = [
				'modules' => $modules,
				'canCreateGroups' => $this->helper->canCreateGroups(),
		];
	
		return new TemplateResponse('customgroups', 'settings-personal', $parameters, '');
	
	}

	/**
	 * @return string the section ID, e.g. 'sharing'
	 * @since 9.1
	 */
	
	public function getSection() {
		return 'customgroups';
	}	
	
	/**
	 * @return int whether the form should be rather on the top or bottom of
	 * the admin section. The forms are arranged in ascending order of the
	 * priority values. It is required to return a value between 0 and 100.
	 *
	 * E.g.: 70
	 * @since 9.1
	 */	
	public function getPriority() {
		return 39;
	}
}