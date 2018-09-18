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
					'negative' => '#d64223',
				],
			],
		],
		'Buttons' => [
			'partial' => 'buttons',
			'model' => [
				'cta' => 'Laboris tempor laboris',
			],
		],
		'Icons' => [
			'partial' => 'icons',
			'model' => [
				'ui' => [
					'triangle-down',
					'chevron-down',
					'chevron-thin-down',
					'triangle-left',
					'chevron-left',
					'chevron-thin-left',
					'plus',
					'minus',
					'cross',
					'link',
					'mail',
					'phone',
				],
			],
		],
		'Forms' => [
			'partial' => 'forms',
			'model' => [],
		],
	],
])
