<?php

namespace yii2module\article\admin\helpers;

// todo: отрефакторить - сделать нормальный интерфейс и родителя

use common\enums\rbac\PermissionEnum;

class Menu {
	
	static function getMenu() {
		return [
			'label' => ['article/main', 'title'],
			'url' => 'article/manage',
			'icon' => 'file-text',
			'module' => 'article',
			'access' => PermissionEnum::ARTICLE_POST_MANAGE,
		];
	}

}
