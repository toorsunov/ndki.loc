<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title="Навоийский государственный горный институт") ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Header -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-inner">
                <div class="header__top-inner-left">
                    <a href="mailto:info@ndki.uz" class="icony"><span class="icon icon-envelope"></span>info@ndki.uz</a>
                    <a href="tel:+998792234966" class="icony"><span class="icon icon-phone"></span>+998 79 223 49 66</a>
                </div>
                <div class="header__top-inner-right">
                    <div class="dropdown symbols">
                        <button class="btn btn-outline-white btn-sm dropdown-toggle" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/symbols/symbol.svg" alt="">
                            Гос. символы
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                        </div>
                    </div>
                    <div class="dropdown special">
                        <button class="btn btn-outline-white btn-sm dropdown-toggle" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-eye"></span>
                            Специальные возможности
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                        </div>
                    </div>
                    <div class="dropdown languages">
                        <button class="btn btn-outline-white btn-sm dropdown-toggle" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/languages/russian.svg" alt="">
                            Русский
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="#">
                                <img src="/images/languages/uzbek.svg" alt="">
                                O'zbek
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="/images/languages/english.svg" alt="">
                                English
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__middle">
        <div class="container">
            <div class="header__middle-inner">
                <div class="logo">
                    <a href="index.html">
                        <img src="/images/assets/logo.svg" alt="Навоийский государственный горный институт">
                        <span>Навоийский государственный <br> горный институт</span>
                    </a>
                </div>
                <div class="search">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm" type="button" id="search">
                                    <i class="icon icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="header__buttons">
                    <a href="#" class="btn btn-info btn-lg"><span class="icon icon-book"></span>Moodle</a>
                    <a href="#" class="btn btn-warning btn-lg"><span class="icon icon-list"></span>Education</a>
                </div>

                <!-- Mobile menu -->
                <a href="javascript:;" class="btn btn-primary btn-lg mobile-menu-toggle">
                    <span class="icon icon-bars"></span>
                </a>
                <div class="mobile-menu">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex">    
                            <a href="mailto:info@ndki.uz" class="icony"><span class="icon icon-envelope"></span></a>
                            <a href="tel:+998792234966" class="icony"><span class="icon icon-phone"></span></a>
                        </div>
                        <div class="d-flex mobile-languages">
                            <a href="javascript:;" class="btn">
                                <img src="/images/languages/uzbek.svg" alt="">
                            </a>
                            <a href="javascript:;" class="btn">
                                <img src="/images/languages/russian.svg" alt="">
                            </a>
                            <a href="javascript:;" class="btn">
                                <img src="/images/languages/english.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="search mb-3">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="button" id="search">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="header__buttons mb-3">
                        <a href="#" class="btn btn-info"><span class="icon icon-book"></span>Moodle</a>
                        <a href="#" class="btn btn-warning"><span class="icon icon-list"></span>Education</a>
                    </div>

                    <div class="mobile-menu__nav">
                        <ul>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Институт</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#" class="active">Структура</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#" class="active">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Деятельность</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Студентам</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Абитуриент</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Новости</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Интерактивные услуги</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="menu">
                <nav>
                    <ul>
                        <li class="menu-item-has-dropdown">
                            <a href="#">Институт</a>
                            <ul>
                                <li><a href="#">Приветствие ректора</a></li>
                                <li><a href="#">История института</a></li>
                                <li><a href="#">Устав института</a></li>
                                <li><a href="#">Нормативные документы</a></li>
                                <li><a href="#">Общая информация</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-dropdown active">
                            <a href="#">Структура</a>
                            <ul>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li class="active"><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-dropdown">
                            <a href="#">Деятельность</a>
                            <ul>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-dropdown">
                            <a href="#">Студентам</a>
                            <ul>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-dropdown">
                            <a href="#">Абитуриент</a>
                            <ul>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-dropdown">
                            <a href="#">Новости</a>
                            <ul>
                                <li><a href="#">Новости</a></li>
                                <li><a href="#">Объявление</a></li>
                                <li><a href="#">Тендеры</a></li>
                                <li><a href="#">Фотогалерея</a></li>
                                <li><a href="#">Видеогалерея</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-dropdown">
                            <a href="#">Интерактивные услуги</a>
                            <ul>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                                <li><a href="#">Menu dropdown item</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Main -->
<main class="main">

    <!-- Section Category Menu & Slider -->
    <section class="section bg-light pt-3 pt-sm-6">
        <div class="container">
            <div class="row row-menu-slider">
                <div class="col order-lg-2 col-right">
                    <div class="slider-main slider-style-1 box-shadow-1">
                        <div class="owl-carousel" id="slider_main">
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="container">
                            <div class="owl-nav" id="slider_main_nav"></div>
                        </div>
                    </div>
                </div>
                <div class="col order-lg-1 col-left">
                    <div class="category-menu box-shadow-1">
                        <ul>
                            <li><a href="#"><img src="/images/category-menu/1.svg" alt=""><span>Институт</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/2.svg" alt=""><span>Образование</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/3.svg" alt=""><span>Наука</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/4.svg" alt=""><span>Международное сотрудничество</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/5.svg" alt=""><span>Институт повышения <br> квалификации и переподготовки</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/6.svg" alt=""><span>Студенческая жизнь</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/7.svg" alt=""><span>Воспитательная работа</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="section bg-light pt-2 pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title">
                        <h2>Новости</h2>
                        <div class="title__border right"></div>
                        <a href="#" class="btn btn-primary btn-sm text-nowrap px-7">Все новости</a>
                    </div>
                    <div class="row row-min">
                        <div class="col-sm-6 col-row-min">
                            <div class="news">
                                <a href="#" class="news__image">
                                    <img src="/images/news/1.jpg" alt="">
                                </a>
                                <div class="news__caption">
                                    <a href="#">Совместная образовательная программа Навоийского государственного горного института</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>22 апреля
                                            </div>
                                        </div>
                                        <a href="#">Подробнее <span class="icon icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-row-min">
                            <div class="news">
                                <a href="#" class="news__image">
                                    <img src="/images/news/2.jpg" alt="">
                                </a>
                                <div class="news__caption">
                                    <a href="#">Постановление Президента Республики Узбекистан PQ-4749</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>21 апреля
                                            </div>
                                        </div>
                                        <a href="#">Подробнее <span class="icon icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-row-min">
                            <div class="news">
                                <a href="#" class="news__image">
                                    <img src="/images/news/3.jpg" alt="">
                                </a>
                                <div class="news__caption">
                                    <a href="#">Электронное учебное пособие авторов НГГИ заняло призовое</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>18 апреля
                                            </div>
                                        </div>
                                        <a href="#">Подробнее <span class="icon icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-row-min">
                            <div class="news">
                                <a href="#" class="news__image">
                                    <img src="/images/news/4.jpg" alt="">
                                </a>
                                <div class="news__caption">
                                    <a href="#">Молодой ученый НГГИ стала Женщиной года!</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>10 апреля
                                            </div>
                                        </div>
                                        <a href="#">Подробнее <span class="icon icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="news-list box-shadow-1 bg-white p-4">
                        <div class="title">
                            <h3>Анонсы событий</h3>
                            <a href="#" class="btn btn-primary btn-sm px-7">Все</a>
                        </div>
                        <div class="news-list-items">
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">XIX республиканская выставка научно-методической литературы, педагогического выставка научно методической литературы</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>21 - 28 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Министерство информации приглашает принять участие в открытом дистанционном</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>19 - 30 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Повышение квалификации по программе «Естественнонаучное знание в системе</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>10 - 24 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Республиканская акция МЧС «За безопасность вместе» стартовала сегодня</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>12 - 18 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Министерство информации приглашает принять участие в открытом дистанционном</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>19 - 30 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Video Gallery -->
    <section class="section section-videos">
        <div class="container">
            <div class="title title--center title--border">
                <div class="title__border left"></div>
                <h2>Видеогалерея</h2>
                <div class="title__border right"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/1.jpg" alt="">
                        <div class="video__caption">
                            <p>Навоий давлат кончилик институти устоз ва мураббийларни байрам билан табриклайди</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/2.jpg" alt="">
                        <div class="video__caption">
                            <p>Навоий давлат кончилик институти Нукус филиали директори Ф.Худойбердиевнинг интервьюси</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/3.jpg" alt="">
                        <div class="video__caption">
                            <p>Давлат тест марказининг расмий веб сайти орқали рўйхатдан ўтиш бўйича батафсил видеоқўлланма</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/4.jpg" alt="">
                        <div class="video__caption">
                            <p>Янги Навоий Давлат Кончилик Институти</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Recommendations & Faculties -->
    <section class="section bg-light py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title title--left title--border">
                        <h2>Рекомендации</h2>
                    </div>
                    <div class="row row-min">
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/1.svg" alt="">
                                <div><span>Приём 2021</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/2.svg" alt="">
                                <div><span>Прямое обращение к ректору НГГИ</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/3.svg" alt="">
                                <div><span>Наука 2020</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/4.svg" alt="">
                                <div><span>Интерактивные услуги</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/5.svg" alt="">
                                <div><span>Онлайн библиотека</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/6.svg" alt="">
                                <div><span>Указы</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/7.svg" alt="">
                                <div><span>Моя идея</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/8.svg" alt="">
                                <div><span>Виртуальная приемная</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/9.svg" alt="">
                                <div><span>Scopus</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="faculty-menu box-shadow-1 bg-white p-4">
                        <div class="title">
                            <h3>Кафедры</h3>
                        </div>
                        <ul>
                            <li><a href="#">Технология машиностроение</a></li>
                            <li><a href="#">Общая физика</a></li>
                            <li><a href="#">Автоматизация и управление</a></li>
                            <li><a href="#">Электро-энергетика</a></li>
                            <li><a href="#">Горное электро-механика</a></li>
                            <li><a href="#">Горное дела</a></li>
                            <li><a href="#">Безопасность жизнедеятельности</a></li>
                            <li><a href="#">Узбекский и иностранные языки</a></li>
                            <li><a href="#">Металлургия</a></li>
                            <li><a href="#">Химия технология</a></li>
                            <li><a href="#">Социальные и гуманитарные науки</a></li>
                            <li><a href="#">Экономика и менеджмент</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info in Numbers -->
    <section class="section section-info-numbers">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>3279</strong>
                        <span>Студентов</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>83</strong>
                        <span>Магистров</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>704</strong>
                        <span>Выпускников</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>91</strong>
                        <span>Профессоров, кандидатов наук</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer__row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <h5>Институт</h5>
                <ul>
                    <li><a href="#">Нормативные документы</a></li>
                    <li><a href="#">Общая информация</a></li>
                    <li><a href="#">Прямое обращение к ректору НГГИ</a></li>
                    <li><a href="#">Интерактивные услуги</a></li>
                    <li><a href="#">Карта сайта</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Деятельность</a></li>
                    <li><a href="#">Структура</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <h5>Ресурсы</h5>
                <ul>
                    <li><a href="#">Расписание занятий</a></li>
                    <li><a href="#">UNISYS</a></li>
                    <li><a href="#">Электронное правительство</a></li>
                    <li><a href="#">Вопросы и ответы</a></li>
                    <li><a href="#">Moodle</a></li>
                    <li><a href="#">Министерство среднего и выcшего образования</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5>Контакты</h5>
                <div class="footer-icony">
                    <div class="icony"><span class="icon icon-mapmarker"></span>Улица Галаба шох, Навои</div>
                    <a href="tel:+998792234966" class="icony"><span class="icon icon-phone"></span>+998 79 223 49 66</a>
                    <a href="mailto:info@ndki.uz" class="icony"><span class="icon icon-envelope"></span>info@ndki.uz</a>
                </div>
                <h4 class="fs-20 text-white mb-4" style="line-height: 1.5;">Навоийский государственный горный институт</h4>
                <p class="text-white m-0">© 2021 Все права защищены.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Video modal -->
<div class="modal fade modal-style-1" id="youtubeVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="icon icon-remove"></span>
            </button>
            <div class="modal-body p-0 d-flex">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/R-O6z1PaChE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/main.js"></script> -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
