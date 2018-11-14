<?php

namespace yii2module\article\admin;

use yii\base\Module as YiiModule;
use yii2lab\extension\web\helpers\Behavior;
use yii2module\article\domain\enums\ArticlePermissionEnum;


/**
 * welcome module definition class
 */
class Module extends YiiModule
{

	public static $langDir = '@yii2module/article/domain/messages';

    public function behaviors()
    {
        return [
            'access' => Behavior::access(ArticlePermissionEnum::POST_MANAGE),
        ];
    }
}
