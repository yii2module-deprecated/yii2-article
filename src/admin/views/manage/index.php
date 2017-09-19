<?php

/* @var $this yii\web\View */

use yii2lab\helpers\Page;

$this->title = t('article/main', 'list');

$baseUrl = $this->context->getBaseUrl();

$columns = [
	[
		'attribute' => 'title',
		'label' => t('main', 'title'),
	],
	[
		'attribute' => 'name',
		'label' => t('main', 'name'),
	],
];

?>

<?= Page::snippet('list', '@common', compact('dataProvider', 'baseUrl', 'columns')) ?>
