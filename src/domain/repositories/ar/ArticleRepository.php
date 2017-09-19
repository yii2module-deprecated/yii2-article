<?php

namespace yii2module\article\domain\repositories\ar;

use yii2module\article\domain\models\Article;
use yii2lab\domain\BaseEntity;
use yii2lab\domain\repositories\ActiveArRepository;

class ArticleRepository extends ActiveArRepository {

	// todo:

	public function uniqueFields() {
		return [
			['name'],
			['title'],
		];
	}

	protected function initQuery() {
		$this->query = Article::find()->where(['is_deleted' => '0']);
	}

	public function delete(BaseEntity $entity) {
		$entity->is_deleted = 1;
		$this->update($entity);
	}

}
