<?php

namespace yii2module\article\admin\forms;

use Yii;
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
			'title' 		=> Yii::t('main', 'title'),
			'name' 		=> Yii::t('main', 'name'),
			'content' 		=> Yii::t('main', 'content'),
		];
	}
	
}
