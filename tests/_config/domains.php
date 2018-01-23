<?php

$config = require(ROOT_DIR . DS . TEST_APPLICATION_DIR . '//common/config/domains.php');

return \yii\helpers\ArrayHelper::merge($config, [
	'article' => 'yii2module\article\domain\Domain',
]);
