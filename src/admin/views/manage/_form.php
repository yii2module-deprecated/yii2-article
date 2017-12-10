<?php
/**
 * @var $this yii\web\View
 * @var $model yii\base\Model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii2mod\markdown\MarkdownEditor;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title')->textInput(); ?>

<?= $form->field($model, 'name')->textInput(); ?>

<?= $form->field($model, 'content', ['template' => "{hint}\n{input}\n{error}"])->widget(MarkdownEditor::class, [
	'editorOptions' => [
		'showIcons' => ["code", "table"],
		'toolbar' => [
			'bold', 'italic', 'strikethrough',
			'|',
			//'heading', 'heading-smaller', 'heading-bigger',
			'heading-1', 'heading-2', 'heading-3',
			'|',
			'code', 'quote',
			'|',
			'unordered-list', 'ordered-list',
			'|',
			'clean-block', 'link', 'image', 'table', 'horizontal-rule',
			'|',
			'preview', 'side-by-side', 'fullscreen', 'guide',
		
		],
	],
]); ?>

<div class="form-group">
	<?= Html::submitButton(t('action', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
