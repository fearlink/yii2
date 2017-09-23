<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <div class="container">

            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><?= Html::a('Главная', '/web') ?></li>
                <li role="presentation"><?= Html::a('Статьи', '/web/index.php?r=post/index') ?></li>
                <li role="presentation"><?= Html::a('Статья', '/web/index.php?r=post/show') ?></li>
            </ul>

            <?= $content ?>

        </div>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>