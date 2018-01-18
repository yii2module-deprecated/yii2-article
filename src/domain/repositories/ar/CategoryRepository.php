<?php

namespace yii2module\article\domain\repositories\ar;

use yii2lab\domain\repositories\ActiveArRepository;

class CategoryRepository extends ActiveArRepository {

	/**
	 * @inheritdoc
	 */
	public function tableName()
	{
		return 'article_category';
	}
	
}
