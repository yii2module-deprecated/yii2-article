<?php

namespace yii2module\article\domain;

use yii2lab\domain\enums\Driver;

class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'article' => Driver::remote() == Driver::DISC ? Driver::DISC : Driver::ACTIVE_RECORD,
			],
			'services' => [
				'article',
			],
		];
	}
	
}