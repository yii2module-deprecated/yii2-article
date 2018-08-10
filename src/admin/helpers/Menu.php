<?php

namespace yii2module\article\admin\helpers;

use yii2lab\extension\menu\interfaces\MenuInterface;
use yii2module\article\domain\enums\ArticlePermissionEnum;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['article/main', 'title'],
			'url' => 'article/manage',
			'icon' => 'file-text-o',
			'module' => 'article',
			'access' => ArticlePermissionEnum::POST_MANAGE,
		];
	}

}
