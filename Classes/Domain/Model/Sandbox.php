<?php
namespace Qinx\Qxsandbox\Domain\Model;

	/***************************************************************
	 *
	 *  Copyright notice
	 *
	 *  (c) 2016 Christian Pschorr <hello@qinx.me>
	 *
	 *  All rights reserved
	 *
	 *  This script is part of the TYPO3 project. The TYPO3 project is
	 *  free software; you can redistribute it and/or modify
	 *  it under the terms of the GNU General Public License as published by
	 *  the Free Software Foundation; either version 3 of the License, or
	 *  (at your option) any later version.
	 *
	 *  The GNU General Public License can be found at
	 *  http://www.gnu.org/copyleft/gpl.html.
	 *
	 *  This script is distributed in the hope that it will be useful,
	 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
	 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 *  GNU General Public License for more details.
	 *
	 *  This copyright notice MUST APPEAR in all copies of the script!
	 ***************************************************************/

/**
 * Sandbox
 */
class Sandbox extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * objectManager
	 *
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * Plugin TypoScript Settings
	 *
	 * @var array $settings
	 */
	protected $settings;

	/**
	 * return an instance of objectManager
	 *
	 * @param none
	 * @return \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	public function getObjectManager() {
		if(($this->objectManager instanceof \TYPO3\CMS\Extbase\Object\ObjectManager) === false) {
			$this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		}

		return $this->objectManager;
	}

	/**
	 * liefert die TypoScript Plugin Einstellungen
	 *
	 * @return array
	 */
	public function getSettings() {
		if(isset($this->settings) === false) {
			$this->settings = $this->getObjectManager()->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager')->getConfiguration(
				\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS, 'Qxsandbox', 'Frontend'
			);
		}

		return $this->settings;
	}
}