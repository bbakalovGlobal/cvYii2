<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container hidden-xs hidden-sm hidden-md">
        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav" id="bottom-menu">
                        <li>
                            <a class="btn" href="#">
                                <i class="fa fa-vk fa-2x">&nbsp;VK</i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="#">
                                <i class="fa fa-facebook-square fa-2x">&nbsp;Facebook</i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="#">
                                <i class="fa fa-linkedin-square fa-2x">&nbsp;Linkedin</i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="#">
                                <i class="fa fa-github-square fa-2x">&nbsp;Github</i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="skype:bdnchk?chat">
                                <i class="fa fa-skype fa-2x">&nbsp;bdnchk</i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="mailto:bakalov.bogdan@gmail.com">
                                <i class="fa fa-envelope fa-2x fa-fw">&nbsp;bakalov.bogdan@gmail.com</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
