<?php

/**
 * This is the configuration for generating message translations
 * for giix. It is used by the 'yiic message' command.
 */
return array(
	'sourcePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'messagePath' => dirname(__FILE__),
	'languages' => array('zh_cn', 'zh_tw', 'de', 'el', 'es', 'sv', 'he', 'nl', 'pt', 'pt_br', 'ru', 'it', 'fr', 'ja', 'pl', 'hu', 'ro', 'id', 'vi', 'bg', 'lv', 'sk'),
	'fileTypes' => array('php'),
	'overwrite' => true,
	'exclude' => array(
		'.svn',
		'/generators',
		'/messages',
		'/vendors',
	),
);