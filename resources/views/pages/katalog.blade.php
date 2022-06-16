@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

    <main class="main_katalog">
        <container>
            <div class="zagolovok-1">
                <h1>Книжные хиты</h1>
            </div>

            <div class="swiper-col">
                <section class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(img/product_hit.jpg)">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Заголовок</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Описание слайда</span>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image:url(img/product_hit2.jpg)">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Заголовок</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Описание слайда</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </section>
            </div>

            <div class="zagolovok-2">
                <h1>Сортировать по жанрам</h1>
            </div>
            <div class="sortirovka">
                <a href="">Сверхъестественное</a>
                <a href="">Боевик</a>
                <a href="">Комедия</a>
                <a href="">Комиксы, манга</a>
                <a href="">Милодрамма</a>
                <a href="">Детективы</a>
                <a href="">Классика</a>
                <a href="">Приключение</a>
                <a href="">Научные</a>
            </div>


            <div class="zagolovok-2">
                <h1>Книги</h1>
            </div>

            <div class="product-1">
                <div class="box_product">
                    <img src="img/product_1.png" alt="">
                    <div class="info_product">
                        <h3>Зверский детектив</h3>
                        <div class="opisanie">
                            <p>Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат... </p>
                        </div>
                        <div class="inn">
                            <h4>Автор:Генадий</h4>
                            <h4>Жанр: Детектив, романтика</h4>
                            <h4>Цена:1500руб</h4>
                        </div>
                        <div class="known">
                            <button class="button button5">В корзину</button>
                            <a href=""><img src="img/izbr.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="box_product">
                    <img src="img/product_2.png" alt="">
                    <div class="info_product">
                        <h3>Зверский детектив</h3>
                        <div class="opisanie">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div class="inn">
                            <h4>Автор:Генадий</h4>
                            <h4>Жанр: Детектив, романтика</h4>
                            <h4>Цена:1500руб</h4>
                        </div>
                        <div class="known">
                            <button class="button button5">В корзину</button>
                            <a href=""><img src="img/izbr.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="box_product">
                    <img src="img/product_1.png" alt="">
                    <div class="info_product">
                        <h3>Зверский детектив</h3>
                        <div class="opisanie">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div class="inn">
                            <h4>Автор:Генадий</h4>
                            <h4>Жанр: Детектив, романтика</h4>
                            <h4>Цена:1500руб</h4>
                        </div>
                        <div class="known">
                            <button class="button button5">В корзину</button>
                            <a href=""><img src="img/izbr.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="box_product">
                    <img src="img/product_2.png" alt="">
                    <div class="info_product">
                        <h3>Зверский детектив</h3>
                        <div class="opisanie">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div class="inn">
                            <h4>Автор:Генадий</h4>
                            <h4>Жанр: Детектив, романтика</h4>
                            <h4>Цена:2500руб</h4>
                        </div>
                        <div class="known">
                            <button class="button button5">В корзину</button>
                            <a href=""><img src="img/izbr.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="box_product">
                    <img src="img/product_1.png" alt="">
                    <div class="info_product">
                        <h3>Зверский детектив</h3>
                        <div class="opisanie">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div class="inn">
                            <h4>Автор:Генадий</h4>
                            <h4>Жанр: Детектив, романтика</h4>
                            <h4>Цена:1600руб</h4>
                        </div>
                        <div class="known">
                            <button class="button button5">В корзину</button>
                            <a href=""><img src="img/izbr.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Пример навигации по страницам">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Предыдущая">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Следующая">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </container>

    </main>

@endsection
