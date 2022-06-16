@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

<main class="col_main">
    <container>


        <!-- Slider main container -->
        <div class="swiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/slide_1.png" alt="">
                    <h2><b>Книжник открыл свой сайт заходи и заказывай.</b></h2>
                </div>
                <div class="swiper-slide"><img src="img/slide_2.png" alt=""></div>
                <div class="swiper-slide"><img src="img/slide_1.png" alt=""></div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
        <div class="zagolovok">
            <h1>Популярные категории</h1>
        </div>
        <div class="kategory">

            <div class="box_kategory">
                <img src="img/kategory_1.png" alt="">
                <h3>Фантастика</h3>
            </div>

            <div class="box_kategory">
                <img src="img/kategory_2.png" alt="">
                <h3>Комедия</h3>
            </div>

            <div class="box_kategory">
                <img src="img/kategory_3.png" alt="">
                <h3>Ужастики</h3>
            </div>

            <div class="box_kategory">
                <img src="img/kategory_4.png" alt="">
                <h3>Детективы</h3>
            </div>

        </div>

        <div class="zagolovok">
            <h1>Хиты продаж</h1>
        </div>

        <div class="product">
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

    </container>
</main>
@endsection
