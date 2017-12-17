<?php
/**
 * @var $this yii\web\View
 */

use yii2module\guide\widgets\Markdown;

$this->title = $article->title;

?>

<h1>
	<?= $article->title ?>
</h1>

<?= Markdown::widget(['content' => $article->content]) ?>
