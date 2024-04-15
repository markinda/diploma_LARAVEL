@extends('layout.main')

@section('title', 'Главная')

@section('content')
    <div class="main-slider">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="swiper-container__img" src="public/img/slide_1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="swiper-container__img" src="public/img/slide_2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="swiper-container__img" src="public/img/slide_3.jpg" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="button__prev">
                <svg class="button-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px"
                     viewBox="0 0 513.32 513.32" style="enable-background:new 0 0 513.32 513.32;" xml:space="preserve">
                <g>
                    <g>
                        <polygon points="299.437,42.777 269.493,72.72 432.045,235.272 0,235.272 0,278.048 432.045,278.048 269.493,440.6
			                             299.437,470.543 513.32,256.66 		"/>
                    </g>
                </g>
            </svg>
            </div>
            <div class="button__next">
                <svg class="button-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px"
                     viewBox="0 0 513.32 513.32" style="enable-background:new 0 0 513.32 513.32;" xml:space="preserve">
                <g>
                    <g>
                        <polygon points="299.437,42.777 269.493,72.72 432.045,235.272 0,235.272 0,278.048 432.045,278.048 269.493,440.6
			                             299.437,470.543 513.32,256.66 		"/>
                    </g>
                </g>
            </svg>
            </div>

        </div>
    </div>
@endsection
