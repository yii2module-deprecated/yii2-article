<?php

namespace yii2module\article\domain\repositories\ar;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\ActiveArRepository;

class CategoriesRepository extends ActiveArRepository {

	public function relations() {
		return [
			'article' => [
				'type' => RelationEnum::ONE,
				'field' => 'article_id',
				'foreign' => [
					'id' => 'article.article',
					'field' => 'id',
				],
			],
			'category' => [
				'type' => RelationEnum::ONE,
				'field' => 'category_id',
				'foreign' => [
					'id' => 'article.category',
					'field' => 'id',
				],
			],
		];
	}
}
