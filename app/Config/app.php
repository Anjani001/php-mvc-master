<?php

return [
	'install'   =>  [
		'status'    =>  true,
		'version'   =>  '1.0',
		'mode'      =>  'demo'  // demo or live
	],
	'name' => NULL,
	'env' => 'Development',
	'debug' => true,
	'url' => 'http://localhost',
	'timezone' => 'Asia/Kolkata',
	'locale' => 'en',
	'uploads'	=>	[
		'images'	=>	[
			'ext_allowed'	=>	[
				'jpg', 'png'
			],
			'size'	=>	[
				'max'	=>	'',				//in kb
				'min'	=>	''
			]
		]
	]
];
