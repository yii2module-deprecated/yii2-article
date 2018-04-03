<?php

namespace yii2module\article\widgets;

use Yii;
use yii\base\Widget;

class PostList extends Widget
{
	
	public $names = [];
	
	/**
	 * Runs the widget
	 */
	public function run()
	{
		$collection = Yii::$domain->article->article->allByNames($this->names);
		return $this->render('list', ['collection' => $collection]);
	}
	
}
