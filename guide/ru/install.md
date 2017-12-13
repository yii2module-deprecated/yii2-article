Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-article
```

Объявляем миграции и ссылки в футер:

```php
return [
	...
	'dee.migration.path' => [
	    ...
		'@vendor/yii2module/yii2-article/src/domain/migrations',
		...
	],
	...
	'article' => [
		'links' => [
			'about',
			'contact',
		],
	],
	...
];
```

Создаем полномочие:

```
oArticlePostManage
```

Объявляем frontend модуль:

```php
return [
	'modules' => [
		// ...
		'article' => 'yii2module\article\web\Module',
		// ...
	],
];
```

Объявляем backend модуль:

```php
return [
	'modules' => [
		// ...
		'article' => [
			'class' => 'yii2module\article\admin\Module',
			'as access' => Config::genAccess(PermissionEnum::ARTICLE_POST_MANAGE),
		],
		// ...
	],
];
```

Объявляем api модуль:

```php
return [
	'modules' => [
		// ...
		'article' => 'yii2module\article\api\Module',
		// ...
	],
];
```

Объявляем домен:

```php
return [
	'components' => [
		// ...
		'article' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2module\article\domain',
			'repositories' => [
				'article',
			],
			'services' => [
				'article',
			],
		],
		// ...
	],
];
```
