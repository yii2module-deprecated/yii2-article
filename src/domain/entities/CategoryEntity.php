<?php

namespace yii2module\article\domain\entities;

use yii2lab\domain\BaseEntity;

class CategoryEntity extends BaseEntity {
	
	protected $id;
	protected $title;

	public function fieldType() {
		return [
			'id' => 'integer',
		];
	}

	public function rules() {
		return [
			[['title'], 'trim'],
			[['title'], 'required'],
		];
	}

}