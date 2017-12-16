<?php

namespace yii2module\article\domain;

class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'article',
			],
			'services' => [
				'article',
			],
		];
	}
	
}