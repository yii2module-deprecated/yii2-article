<?php
namespace yii2module\article\domain\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class Article extends ActiveRecord 
{

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%article}}';
	}
	
	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => TimestampBehavior::className(),
				'attributes' => [
					ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
					ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
				],
				'value' => function() { return date('Y-m-d H:i:s'); },
			],
		];
	}
	
}
