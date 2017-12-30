<?php

namespace yii2module\article\domain\services;

use common\enums\rbac\PermissionEnum;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\ActiveBaseService;

class ArticleService extends ActiveBaseService {

	public function access() {
		return [
			[
				'roles' => PermissionEnum::ARTICLE_POST_MANAGE,
				'only' => ['create', 'update', 'delete'],
			],
			[
				'roles' => PermissionEnum::ARTICLE_POST_DELETE,
				'only' => 'delete',
			],
		];
	}

	public function oneByName($name, Query $query = null) {
		$query = Query::forge($query);
		$query->where('name', $name);
		$entity = parent::one($query);
		return $entity;
	}

	public function allByNames($names, Query $query = null) {
		$query = Query::forge($query);
		$query->where('name', $names);
		$entity = parent::all($query);
		return $entity;
	}

}
