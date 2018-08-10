<?php

namespace yii2module\article\domain\enums;

use yii2lab\misc\enums\BaseEnum;

class ArticlePermissionEnum extends BaseEnum
{

    // Управление статьями сайта
    const POST_MANAGE = 'oArticlePostManage';

    // Удаление статьи
    const POST_DELETE = 'oArticlePostDelete';

}