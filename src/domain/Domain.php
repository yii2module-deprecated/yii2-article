<?php

namespace yii2module\article\domain;

use yii2lab\domain\enums\Driver;

/**
 * Class Domain
 *
 * @package yii2module\article\domain
 *
 * @property \yii2module\article\domain\services\ArticleService $article
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		$driver = Driver::slave() == Driver::FILEDB ? Driver::FILEDB : Driver::ACTIVE_RECORD;
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