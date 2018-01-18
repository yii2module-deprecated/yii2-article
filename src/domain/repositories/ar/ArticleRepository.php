<?php

namespace yii2module\article\domain\repositories\ar;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\BaseEntity;
use yii2lab\domain\repositories\ActiveArRepository;

class ArticleRepository extends ActiveArRepository {
	
	public function tableName()
	{
		return 'article';
	}
	
	public function uniqueFields() {
		return [
			['name'],
			['title'],
		];
	}
	
	public function relations() {
		return [
			'categories' => [
				'type' => RelationEnum::MANY_TO_MANY,
				'field' => 'id',
				'via' => [
					'id' => 'article.categories',
					'field' => 'article_id',
				],
				'foreign' => [
					'id' => 'article.categories',
					'field' => 'category_id',
				],
			],
		];
	}
	
	protected function initQuery() {
		$this->query = $this->model->find()->where(['is_deleted' => '0']);
	}

	public function delete(BaseEntity $entity) {
		$entity->is_deleted = 1;
		$this->update($entity);
	}

}
