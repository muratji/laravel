@extends('app/styleguide', [
	'page' => [
		'title' => 'Styleguide',
	],
	'model' => [
		'Font families' => [
			'partial' => 'fonts',
			'model' => [],
		],
		'Typography' => [
			'partial' => 'typography',
			'model' => [],
		],
		'Colour palette' => [
			'partial' => 'colours',
			'model' => [
				'featured' => [
					'Brand' => [
						'primary' => '#ff585d',
						'secondary' => '#fe0',
					],
					'Greyscale' => [
						'black' => '#1a1a1a',
						'grey-dark' => '#444',
						'grey' => '#888',
						'grey-light' => '#ddd',
						'grey-x-light' => '#fafafa',
						'white' => '#fff',
					],
				],
				'additional' => [
					'positive' => '#24b35d',
					'negative' => '#f50023',
				],
			],
		],
		'Buttons - Vue' => [
			'partial' => 'vue',
			'model' => [
				'cta' => 'Laboris tempor laboris',
				'types' => [
					'Primary' => 'primary',
					'Secondary' => 'secondary',
					'Positive' => 'positive',
					'Negative' => 'negative',
				],
			],
		],
		'Buttons - Blade' => [
			'partial' => 'blade',
			'model' => [
				'cta' => 'Laboris tempor laboris',
				'types' => [
					'Primary' => 'primary',
					'Secondary' => 'secondary',
					'Positive' => 'positive',
					'Negative' => 'negative',
				],
			],
		],
	],
])
