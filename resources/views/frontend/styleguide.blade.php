@extends('app/styleguide', [
	'model' => [
		'Font families' => [
			'partial' => 'fonts',
			'model' => null,
		],
		'Typography' => [
			'partial' => 'typography',
			'model' => null,
		],
		'Colour palette' => [
			'partial' => 'colours',
			'model' => [
				'featured' => [
					'Primary' => [
						'hex' => '#ffee00',
						'variants' => [
							'Dark' => '#ecc804',
							'Light' => '#fff899',
							'X-Light' => '#fffccc',
						],
					],
					'Secondary' => [
						'hex' => '#5e5e5e',
						'variants' => [
							'Dark' => '#363636',
							'Light' => '#afafaf',
							'X-Light' => '#d7d7d7',
						],
					],
					'Accent' => [
						'hex' => '#5e5e5e',
						'variants' => [
							'Dark' => '#363636',
							'Light' => '#afafaf',
							'X-Light' => '#d7d7d7',
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
])
