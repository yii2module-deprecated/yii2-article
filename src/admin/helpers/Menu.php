<?php

namespace yii2module\article\admin\helpers;

use common\enums\rbac\PermissionEnum;

class Menu {
	
	public function toArray() {
		return [
			'label' => ['article/main', 'title'],
			'url' => 'article/manage',
			'icon' => 'file-text-o',
			'module' => 'article',
			'access' => PermissionEnum::ARTICLE_POST_MANAGE,
		];
	}

}
