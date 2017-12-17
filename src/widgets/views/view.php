<?php

use yii2module\markdown\widgets\Markdown;

/**
 * @var $contentOnly boolean
 * @var $headerLevel integer
 * @var $article \yii2module\article\domain\entities\ArticleEntity
 */

if(!empty($article)) { ?>

    <?php if(empty($contentOnly)) { ?>
        <h<?= $headerLevel ?>>
			<?= $article->title ?>
        </h<?= $headerLevel ?>>
    <?php } ?>
    
    <p>
		<?= Markdown::widget(['content' => $article->content]) ?>
    </p>

<?php } else { ?>

    <div class="alert alert-warning" role="alert">
	    <?= Yii::t('article/main', 'not_found') ?>
    </div>

<?php } ?>
