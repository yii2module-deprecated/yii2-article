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

```
oArticlePostDelete
```

Объявляем frontend модуль:

```php
return [
    'modules' => [
        // ...
        'article' => 'yii2module\article\web\Module',
        'components' => [
			...
			'urlManager' => [
				'rules' => [
					...
					// ----------------- guide module -----------------

					'guide/<project_id>/chapter/<id>'=> 'guide/chapter/view',
					'guide/<project_id>/<id>/update'=> 'guide/article/update',
					'guide/<project_id>/<id>/delete'=> 'guide/article/delete',
					'guide/<project_id>/<id>/code'=> 'guide/article/code',
					'guide/<project_id>/<id>'=> 'guide/article/view',
					'guide/<project_id>'=> 'guide/article',
					...
				],
			],
			...
		],
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
	'components' => [
		'urlManager' => [
			'rules' => [
                ...
               ['class' => 'yii\rest\UrlRule', 'controller' => ['v4/article' => 'article/post']],
                ...
			],
		],
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
