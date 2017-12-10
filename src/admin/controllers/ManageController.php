<?php

namespace yii2module\article\admin\controllers;

use yii2lab\domain\web\ActiveController as Controller;

class ManageController extends Controller {

	public $serviceName = 'article.article';
	public $formClass = 'yii2module\article\admin\forms\PostForm';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['view']['render'] = 'view';
		return $actions;
	}
	
}
