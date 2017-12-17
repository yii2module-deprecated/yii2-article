<?php

namespace yii2module\article\widgets;

use Yii;
use yii\base\Widget;

class PostList extends Widget
{
	
	/**
	 * Runs the widget
	 */
	public function run()
	{
		$collection = Yii::$app->article->article->allForLinks();
		return $this->render('list', ['collection' => $collection]);
	}
	
}
