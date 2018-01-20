<?php

use yii2lab\domain\helpers\ConfigHelper;

return [
	'components' => [
		'article' => ConfigHelper::normalizeItemConfig('article', [
			'class' => 'yii2module\article\domain\Domain',
		]),
	],
];
