<?php
/**
 * @var $this yii\web\View
 * @var $model yii\base\Model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title')->textInput(); ?>

<?= $form->field($model, 'name')->textInput(); ?>

<?= $form->field($model, 'content')->textarea(); ?>

<div class="form-group">
	<?= Html::submitButton(t('action', 'SAVE'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
