<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2005-2008 Dieter Bunkerd (dieter.bunkerd@t3net.in.th)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Plugin 'tx_dbttv_pi1' for the 'db_ttv' extension.
 *
 * @author        Andreas Stauder, Dieter Bunkerd
 * @version        4.0.4
 */
class tx_dbttv_pi1 extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {
	var $prefixId = 'tx_dbttv_pi1'; // Same as class name
	var $scriptRelPath = 'pi1/class.tx_dbttv_pi1.php'; // Path to this script relative to the extension dir.
	var $extKey = 'db_ttv'; // The extension key.
	var $pi_checkCHash = TRUE;

	function main($content, $conf) {
		$this->dbttvstyle = $conf;
		$err_flag = 0;
		$currLevel = 0;
		$returnCode = 0;
		$currFieldValue = '';
		$currParentID = '';
		$loopEnd = 0;

		if (isset($this->dbttvstyle["uid"])) $search_uid = $this->dbttvstyle["uid"]; else $search_uid = $GLOBALS['TSFE']->id;
		if (isset($this->dbttvstyle["field"])) $search_dbttvfield = $this->dbttvstyle["field"]; else {
			$err_flag = 1;
			$defReturnValue = "tx_dbttv_no_field_specified";
		}

		$datastructure_uid = 0;
		$startpage = 1;

		while ($datastructure_uid == 0 && $search_uid != 0) {
			$findit = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('pid, tx_templavoila_ds, tx_templavoila_next_ds', 'pages', 'uid = ' . $search_uid);
			if (count($findit)) {
				!$startpage ? $datastructure_uid = $findit['tx_templavoila_next_ds'] : $startpage = 0;
				if ($datastructure_uid == 0) $datastructure_uid = $findit['tx_templavoila_ds'];
				if ($datastructure_uid != 0) {
					$datastructure = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('dataprot', 'tx_templavoila_datastructure', 'uid = ' . $datastructure_uid);
					if (count($datastructure)) {
						$xmlstructure = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($datastructure['dataprot']);
						return $xmlstructure['ROOT']['dbttvdata'][$search_dbttvfield];
					}
				}
				$search_uid = $findit['pid'];
			} else {
				$search_uid = 0;
			}
		}
		return '';
	}
}


?>
