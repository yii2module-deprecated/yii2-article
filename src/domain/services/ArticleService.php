<?php

namespace yii2module\article\domain\services;

use yii2lab\domain\data\Query;
use yii2lab\domain\services\ActiveBaseService;

class ArticleService extends ActiveBaseService {

	public function access() {
		return [
			['article.post.manage', ['create', 'update', 'delete']],
			['article.post.delete', ['delete']],
		];
	}

	public function oneByName($name, Query $query = null) {
		$query = Query::forge($query);
		$query->where('name', $name);
		$entity = parent::one($query);
		return $entity;
	}

	public function allByName($name, Query $query = null) {
		$query = Query::forge($query);
		$query->where('name', $name);
		$entity = parent::all($query);
		return $entity;
	}

	public function allForLinks(Query $query = null) {
		$query = Query::forge($query);
		$articleList = param('article.links');
		return $this->allByName($articleList, $query);
	}
}
