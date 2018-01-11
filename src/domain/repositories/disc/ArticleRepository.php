<?php

namespace yii2module\article\domain\repositories\disc;

use yii2lab\domain\repositories\ActiveDiscRepository;
use yii2module\article\domain\models\Article;
use yii2lab\domain\BaseEntity;

class ArticleRepository extends ActiveDiscRepository {
	
	public $table = 'article';
	
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
