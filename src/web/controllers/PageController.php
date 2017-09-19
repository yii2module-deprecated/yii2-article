<?php

namespace yii2module\article\web\controllers;

use Yii;
use yii\web\Controller;

class PageController extends Controller {

	public function actionView($id) {
		if(is_numeric($id)) {
			$article = Yii::$app->article->article->oneById($id);
		} else {
			$article = Yii::$app->article->article->oneByName($id);
		}
		return $this->render('view', ['article' => $article]);
	}

}
