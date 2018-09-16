<?php

namespace tests\functional\services;

use yii2lab\test\Test\Unit;
use Yii;
use yii\web\ForbiddenHttpException;
use yii2lab\domain\BaseEntity;
use yii2lab\domain\data\Query;
use yii2module\article\domain\entities\ArticleEntity;
use yii2module\article\domain\fixtures\ArticleCategoriesFixture;
use yii2module\article\domain\fixtures\ArticleCategoryFixture;
use yii2module\article\domain\fixtures\ArticleFixture;
use yii2module\account\domain\v2\helpers\TestAuthHelper;

class ArticleTest extends Unit
{
	
	const ADMIN_ID = 381949;
	
	public function _before()
    {
        $this->tester->haveFixtures([
	        'category' => [
		        'class' => ArticleCategoryFixture::class,
		        //'dataFile' => '@tests/_fixtures/data/user.php'
	        ],
	        'categories' => [
		        'class' => ArticleCategoriesFixture::class,
		        //'dataFile' => '@tests/_fixtures/data/user.php'
	        ],
        	'article' => [
                'class' => ArticleFixture::class,
                //'dataFile' => '@tests/_fixtures/data/user.php'
            ],
        ]);
    }
    
	public function testAllWithCategories()
	{
		
		/** @var BaseEntity[] $collection */
		$query = Query::forge();
		$query->with('categories');
		$collection = \App::$domain->article->article->all($query);
		
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
	
	public function testOneWithCategories()
	{
		
		/** @var BaseEntity[] $collection */
		$query = Query::forge();
		$query->where(['id' => 1]);
		$query->with('categories');
		$entity = \App::$domain->article->article->one($query);
		
		$this->tester->assertEntity([
			'id' => 1,
			'name' => 'about',
			'categories' => [
				[
					'id' => 1,
				],
			],
		], $entity);
	}
	
	public function testInsert()
	{
		TestAuthHelper::authById(self::ADMIN_ID);
		
		$entity = \App::$domain->article->factory->entity->create(ArticleEntity::class);
		$entity->name = 'services';
		$entity->title = 'Our services';
		$entity->content = 'Our services content';
		$entity = \App::$domain->article->article->create($entity);
		
		$this->tester->assertEntity([
			'name' => 'services',
			'title' => 'Our services',
			'content' => 'Our services content',
		], $entity);
		
		$this->tester->assertEquals(4, $entity->id);
	}
	
	public function testUpdate()
	{
		TestAuthHelper::authById(self::ADMIN_ID);
		
		$entity = \App::$domain->article->article->oneById(1);
		$entity->name = '111';
		$entity->title = '222';
		$entity->content = '333';
		\App::$domain->article->article->updateById(1, $entity);
		
		$entity = \App::$domain->article->article->oneById(1);
		
		$this->tester->assertEntity([
			//'id' => 4,
			'name' => '111',
			'title' => '222',
			'content' => '333',
		], $entity);
	}
	
	public function testDelete()
	{
		TestAuthHelper::authById(self::ADMIN_ID);
		
		try {
			\App::$domain->article->article->deleteById(1);
			$this->tester->assertTrue(false);
		} catch(ForbiddenHttpException $e) {
			$this->tester->assertTrue(true);
		}
		\App::$domain->article->article->oneById(1);
	}
}
