<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=78.108.80.119;dbname=b168738_tf',
			'emulatePrepare' => true,
			'username' => 'u168738',
			'password' => '1Q2w3e4r',
//			'password' => '1596532860A',
//			'charset' => 'cp1251',
			'charset' => 'utf8',
//                        'tablePrefix' => 'tbl_',
                    ),
	),
);