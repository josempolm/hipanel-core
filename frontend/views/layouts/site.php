<?php
use yii\helpers\Html;
use frontend\assets\StartAgencyAsset;

StartAgencyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= Html::csrfMetaTags() ?>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
<?php $this->beginBody(); ?>
<?php
$menuItems = [
    ['label' => '', 'url' => '#page-top', 'options' => ['class' => 'hidden']],
    ['label' => 'Features', 'url' => '#features', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
    ['label' => 'Screenshots', 'url' => '#screenshots', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
    ['label' => 'Pricing', 'url' => '#pricing', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
    ['label' => 'About', 'url' => '#about', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
    ['label' => 'Team', 'url' => '#team', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
    ['label' => 'Contact', 'url' => '#contact', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/auth', 'authclient' => 'hi3a']];
}
else {
    $menuItems[] = ['label' => Yii::t('app', 'Panel'), 'url' => ['/hipanel'], 'template' => '<a href="{url}" style="color: #fed136;">{label}</a>'];
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']
    ];
}
?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><?= Yii::$app->name; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?= \yii\widgets\Menu::widget([
                'options' => ['class' => 'nav navbar-nav navbar-right'],
                'items' => $menuItems,
            ]); ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Panel!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-2">
                    <a href="#features" class="page-scroll btn btn-xl btn-block">Tell Me More</a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="page-scroll btn btn-xl btn-block">Try it out</a>
                </div>
            </div>

        </div>
    </div>
</header>

<?= $content ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; <?= Yii::$app->name; ?> <?= date('Y'); ?></span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>

                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive" src="img/portfolio/roundicons-free.png" alt="">

                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                            repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                            nostrum, reiciendis facere nemo!</p>

                        <p>
                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of
                            them for free, courtesy of <a
                                href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>,
                            or you can purchase the 1500 icon set <a
                                href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                        <ul class="list-inline">
                            <li>Date: July 2014</li>
                            <li>Client: Round Icons</li>
                            <li>Category: Graphic Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fa fa-times"></i> Close Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Heading</h2>

                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png"
                             alt="">

                        <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder
                            for professionals. Startup Framework contains components and complex blocks (PSD+HTML
                            Bootstrap themes and templates) which can easily be integrated into almost any design.
                            All of these components are made in the same style, and can easily be integrated into
                            projects, allowing you to create hundreds of solutions for your future projects.</p>

                        <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fa fa-times"></i> Close Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>

                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">

                        <p>Treehouse is a free PSD web template built by <a
                                href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and
                            spacious design perfect for people or startup companies looking to showcase their apps
                            or other projects.</p>

                        <p>You can download the PSD template in this portfolio sample item at <a
                                href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fa fa-times"></i> Close Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>

                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">

                        <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by
                            <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and
                            clean one page web template that was made exclusively for Best PSD Freebies. This
                            template has a great portfolio, timeline, and meet your team sections that can be easily
                            modified to fit your needs.</p>

                        <p>You can download the PSD template in this portfolio sample item at <a
                                href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fa fa-times"></i> Close Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>

                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">

                        <p>Escape is a free PSD web template built by <a
                                href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page
                            web template that was designed with agencies in mind. This template is ideal for those
                            looking for a simple one page solution to describe your business and offer your
                            services.</p>

                        <p>You can download the PSD template in this portfolio sample item at <a
                                href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fa fa-times"></i> Close Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>

                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">

                        <p>Dreams is a free PSD web template built by <a
                                href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern
                            one page web template designed for almost any purpose. It’s a beautiful template that’s
                            designed with the Bootstrap framework in mind.</p>

                        <p>You can download the PSD template in this portfolio sample item at <a
                                href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fa fa-times"></i> Close Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
