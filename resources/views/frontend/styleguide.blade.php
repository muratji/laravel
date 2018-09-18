@extends('app/styleguide', [
	'model' => [
		'Font families' => [
			'partial' => 'fonts',
			'model' => [
				'families' => [
					'Helvetica' => [
						'stack' => 'Helvetica, sans-serif',
						'styles' => [
							'Bold 700',
						],
						'source' => [
							'copy' => 'fonts.com',
							'url' => '#0',
						],
					],
					'Georgia' => [
						'stack' => 'Georgia, serif',
						'styles' => [
							'Regular 400',
							'Bold 700',
						],
						'source' => 'System',
					],
					'Bradley Hand' => [
						'stack' => 'Bradley Hand',
						'styles' => [
							'Regular 400',
						],
						'source' => 'System',
					],
				],
			],
		],
		'Typography' => [
			'partial' => 'typography',
			'model' => [
				'headings' => [
					'Heading 1' => 'h1',
					'Heading 2' => 'h2',
					'Heading 3' => 'h3',
					'Heading 4' => 'h4',
					'Heading 5' => 'h5',
					'Heading 6' => 'h6',
				],
			],
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
						'hex' => '#68cbca',
						'variants' => [
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
