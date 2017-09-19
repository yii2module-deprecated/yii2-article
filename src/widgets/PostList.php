<?php

namespace yii2module\article\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class PostList extends Widget
{
	
	/**
	 * Runs the widget
	 */
	public function run()
	{
		$collection = Yii::$app->article->article->allForLinks();
		foreach($collection as $index => $article) {
			 if($index != 0) {
				?><span class="text-muted"> | </span><?php
			}
			echo Html::a($article->title, ['/article/' . $article->name]);
		}
	}
	
}
