<?php
/**
 * ownCloud CustomGroups
 * @deprecated
 * @author Sujith Haridasan <sharidasan@owncloud.com>
 * @copyright 2017 ownCloud GmbH.
 *
 * This code is covered by the ownCloud Commercial License.
 *
 * You should have received a copy of the ownCloud Commercial License
 * along with this program. If not, see <https://owncloud.com/licenses/owncloud-commercial/>.
 *
 */

namespace OCA\CustomGroups;

use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Settings\IIconSection;

class SettingsSection implements IIconSection {

	/** @var IL10N  */
	private $l;

        /** @var IURLGenerator */
        private $urlGenerator;

        /**
         * @param IL10N $l
         * @param IURLGenerator $url
         */
        public function __construct(IL10N $l, IURLGenerator $urlGenerator) {
		$this->l = $l;
		$this->urlGenerator = $urlGenerator;
	}

	public function getPriority() {
		return 10;
	}

        public function getIcon() {
		return $this->urlGenerator->imagePath('customgroups', 'icon.svg');
        }

	public function getID() {
		return 'customgroups';
	}

	public function getName() {
		return $this->l->t('Custom Groups');
	}

}

