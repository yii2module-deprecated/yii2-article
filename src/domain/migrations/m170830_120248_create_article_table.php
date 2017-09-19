<?php

use yii2lab\migration\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `article`.
*/
class m170830_120248_create_article_table extends Migration
{
	public $table = '{{%article}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
			'name' => $this->string(32),
			'title' => $this->string(),
			'content' => $this->text(),
			'is_deleted' => $this->integer(1)->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'created_at' => $this->timestamp(),
		];
	}

	public function afterCreate()
	{
		$this->myCreateIndexUnique(['name']);
	}

}
