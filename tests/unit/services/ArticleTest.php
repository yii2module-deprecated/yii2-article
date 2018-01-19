<?php

namespace yii2module\article\tests\unit\services;

use Codeception\Test\Unit;
use UnitTester;
use Yii;
use yii2lab\domain\BaseEntity;
use yii2lab\domain\data\Query;
use yii2module\article\domain\fixtures\ArticleCategoriesFixture;
use yii2module\article\domain\fixtures\ArticleCategoryFixture;
use yii2module\article\domain\fixtures\ArticleFixture;

/**
 * Class ArticleTest
 *
 * @package yii2lab\domain\tests\unit\services
 *
 * @property UnitTester $tester
 */
class ArticleTest extends Unit
{
	
	public function _before()
    {
        $this->tester->haveFixtures([
	        'category' => [
		        'class' => ArticleCategoryFixture::className(),
		        //'dataFile' => '@tests/_fixtures/data/user.php'
	        ],
	        'categories' => [
		        'class' => ArticleCategoriesFixture::className(),
		        //'dataFile' => '@tests/_fixtures/data/user.php'
	        ],
        	'article' => [
                'class' => ArticleFixture::className(),
                //'dataFile' => '@tests/_fixtures/data/user.php'
            ],
        ]);
    }
    
	public function testAllWithCategories()
	{
		
		/** @var BaseEntity[] $collection */
		$query = Query::forge();
		$query->with('categories');
		$collection = Yii::$app->article->article->all($query);
		
		$this->tester->assertCollection([
			0 => [
				'id' => 1,
				'name' => 'about',
				'categories' => [
					[
						'id' => 1,
					],
				],
			],
			2 => [
				'id' => 3,
				'name' => 'contact',
				'categories' => [
					[
						'id' => 1,
					],
					[
						'id' => 2,
					],
				],
			],
		], $collection);
	}
	
}
