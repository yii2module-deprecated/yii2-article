<?php

namespace yii2module\article\widgets;

use Yii;
use yii\base\Widget;
use yii\web\NotFoundHttpException;

class PostView extends Widget
{
	
    public $name;
	public $contentOnly = false;
	public $headerLevel = 3;
    
	/**
	 * Runs the widget
	 */
	public function run()
	{
		try {
			$article = \App::$domain->article->article->oneByName($this->name);
		} catch(NotFoundHttpException $e) {
			$article = null;
		}
		return $this->render('view', [
			'article' => $article,
			'contentOnly' => $this->contentOnly,
			'headerLevel' => $this->headerLevel,
		]);
	}
	
}
