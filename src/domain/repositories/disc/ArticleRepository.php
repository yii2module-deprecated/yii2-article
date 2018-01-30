<?php

namespace yii2module\article\domain\repositories\disc;

use yii2lab\domain\data\Query;
use yii2lab\domain\repositories\ActiveDiscRepository;
use yii2lab\domain\BaseEntity;

class ArticleRepository extends ActiveDiscRepository {
	
	public $table = 'article';
	
	public function uniqueFields() {
		return [
			['name'],
			['title'],
		];
	}

	public function one(Query $query = null) {
		$query = Query::forge($query);
		$query->where(['is_deleted' => '0']);
		return parent::one($query);
	}
	
	public function all(Query $query = null) {
		$query = Query::forge($query);
		$query->where(['is_deleted' => '0']);
		return parent::all($query);
	}
	
	public function delete(BaseEntity $entity) {
		$entity->is_deleted = 1;
		$this->update($entity);
	}

}
