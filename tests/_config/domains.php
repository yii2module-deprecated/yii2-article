<?php

$config = require(ROOT_DIR . '/vendor/yii2lab/yii2-app/tests/store/app/common/config/domains.php');

return \yii\helpers\ArrayHelper::merge($config, [
	'article' => 'yii2module\article\domain\Domain',
]);
