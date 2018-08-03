<?php

return [
	'page' => [
		'title' => 'Page Title',
		'site_name' => 'Site Name',
		'description' => 'Page description',
		'meta_description' => 'Meta description',
		'social_image' => '/assets/img/meta/share.png',
		'url' => 'http://www.example.com/',
		'creator_twitter_handle' => '@author_handle',
		'site_twitter_handle' => '@site_handle',
	],
	'styleguide' => [
		'foundation' => [
			'sections' => [
				'colours' => [
					'data' => [
						'featured' => [
							'Primary' => [
								'colour' => 'Yellow',
								'hex' => '#ffee00',
								'variants' => [
									'Light' => '#fff133',
									'Lighter' => '#fff899',
									'Lightest' => '#fffccc',
								],
							],
							'Secondary' => [
								'colour' => 'Grey',
								'hex' => '#363636',
								'variants' => [
									'Light' => '#5e5e5e',
									'Lighter' => '#afafaf',
									'Lightest' => '#d7d7d7',
								],
							],
						],
						'additional' => [
							'Red' => '#d64223',
							'Orange' => 'orange',
							'Yellow' => '#ffee00',
							'Green' => '#649d61',
							'Blue' => '#3d8bce',
							'Purple' => 'purple',
						],
					],
				],
			],
		],
		'core' => [
			'sections' => [],
		],
		'blocks' => [
			'sections' => [],
		],
	],
];
