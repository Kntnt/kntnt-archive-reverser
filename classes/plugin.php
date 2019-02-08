<?php

namespace Kntnt\Archive_Reverser;

class Plugin extends Abstract_Plugin {

	protected function classes_to_load() {

		return [
			'public' => [
				'init' => [
					'Reverser',
				],
			],
            'admin' => [
                'init' => [
                    'Settings',
                ],
            ],
		];

	}

}
