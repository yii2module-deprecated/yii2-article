<?php if(!empty($article)) { ?>

    <?php if(empty($contentOnly)) { ?>
        <h<?= $headerLevel ?>>
			<?= $article->title ?>
        </h<?= $headerLevel ?>>
    <?php } ?>
    
    <p>
		<?= $article->content ?>
    </p>

<?php } else { ?>

    <div class="alert alert-warning" role="alert">
	    <?= Yii::t('article/main', 'not_found') ?>
    </div>

<?php } ?>
