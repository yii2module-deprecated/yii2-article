<?php

use yii2lab\migration\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `article_categories`.
*/
class m180118_100608_create_article_categories_table extends Migration
{
	public $table = '{{%article_categories}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'article_id' => $this->integer(),
			'category_id' => $this->integer(),
		];

	}

	public function afterCreate()
	{
		$this->myCreateIndexUnique(['article_id', 'category_id']);
		$this->myAddForeignKey(
			'article_id',
			'{{%article}}',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->myAddForeignKey(
			'category_id',
			'{{%article_category}}',
			'id',
			'CASCADE',
			'CASCADE'
		);
	}

}
