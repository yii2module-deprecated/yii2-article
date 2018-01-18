<?php

namespace yii2module\article\domain;

use yii2lab\domain\enums\Driver;

class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		$driver = Driver::slave() == Driver::DISC ? Driver::DISC : Driver::ACTIVE_RECORD;
		return [
			'repositories' => [
				'article' => $driver,
				'category' => $driver,
				'categories' => $driver,
			],
			'services' => [
				'article',
			],
		];
	}
	
}