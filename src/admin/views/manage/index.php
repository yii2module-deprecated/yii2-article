<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii2lab\misc\yii\grid\ActionColumn;
use yii2lab\misc\yii\grid\TitleColumn;

$this->title = Yii::t('article/main', 'list');

$baseUrl = $this->context->getBaseUrl();

$columns = [
	[
		'class' => TitleColumn::className(),
		'baseUrl' => $baseUrl,
	],
	[
		'attribute' => 'name',
		'label' => Yii::t('main', 'name'),
	],
	[
		'class' => ActionColumn::className(),
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>