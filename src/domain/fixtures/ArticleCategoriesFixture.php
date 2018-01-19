<?php

namespace yii2module\article\domain\fixtures;

use yii\test\ActiveFixture;

class ArticleCategoriesFixture extends ActiveFixture
{
	public $tableName = '{{%article_categories}}';
	public $depends = [
		'yii2module\article\domain\fixtures\ArticleCategoryFixture',
		'yii2module\article\domain\fixtures\ArticleFixture',
	];
}