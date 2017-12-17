<?php

namespace yii2module\article\domain\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class ArticleEntity
 *
 * @package yii2module\article\domain\entities
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $content
 * @property string $updated_at
 * @property boolean $is_deleted
 * @property string $created_at
 */
class ArticleEntity extends BaseEntity {
	
	protected $id;
	protected $name;
	protected $title;
	protected $content;
	protected $updated_at;
	protected $is_deleted = false;
	protected $created_at;

	public function fieldType() {
		return [
			'id' => 'integer',
			'is_deleted' => 'boolean',
		];
	}

	public function rules() {
		return [
			[['title', 'content', 'name'], 'trim'],
			[['title', 'content', 'name'], 'required'],
		];
	}

}