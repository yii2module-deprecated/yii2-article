<?php

use yii\helpers\Html;
use yii2lab\misc\enums\HtmlEnum;

/**
 * @var $collection array
 */

foreach($collection as $index => $article) {
     if($index != 0) {
	     echo HtmlEnum::PIPE;
    }
    echo Html::a($article->title, ['/article/' . $article->name]);
}
