<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Qinx.' . $_EXTKEY,
	'Frontend',
	array(
		'Frontend'	=> 'index',
		'Event'			=> 'readIn'
	),
	array(
		'Event' => 'readIn'
	)
);
