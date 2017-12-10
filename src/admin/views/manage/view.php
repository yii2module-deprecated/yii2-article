<?php

/* @var $this yii\web\View
 * @var $entity yii2lab\domain\BaseEntity
 */
use yii2lab\helpers\yii\Html;
use yii2module\guide\module\widgets\Markdown;

?>

<div class="pull-right">
	<?= Html::a(Html::fa('pencil', ['class' => 'text-primary']), ['/article/manage/update', 'id' => $entity->id], [
		'class' => 'btn btn-default',
		'title' => t('action', 'update'),
	]) ?>
	<?= Html::a(Html::fa('trash', ['class' => 'text-danger']), ['/article/manage/delete', 'id' => $entity->id], [
		'class' => 'btn btn-default',
		'title' => t('action', 'delete'),
		'data' => [
			'confirm' => t('yii', 'Are you sure you want to delete this item?'),
			'method' => 'post',
		],
	]) ?>
</div>

<?= Markdown::widget(['content' => $entity->content]) ?>
