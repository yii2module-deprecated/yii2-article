<?php

namespace yii2module\article\admin\forms;

use yii2module\article\domain\entities\ArticleEntity;
use yii2lab\domain\base\Model;

class PostForm extends Model
{
	
	public $title;
	public $name;
	public $content;

	public function rules()
	{
		$entity = new ArticleEntity();
		return $entity->rules();
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'title' 		=> t('main', 'title'),
			'name' 		=> t('main', 'name'),
			'content' 		=> t('main', 'content'),
		];
	}
	
}
