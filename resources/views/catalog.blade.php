@extends('layout.main')

@section('title', 'Catalog')

@section('content')
    <div class="product-header">
        <div class="product-header__title">
            <span>Поиск товара:</span>
        </div>
        <div class="product-header__items">
            <div class="product-header__item">
                <form action="{{ route( 'catalogFilter') }}" method="get" class="filter-form">
                    @csrf
                    <div class="product-header__form">
                        <select class="product-header__select" class="" name="category" required>
                            @foreach($category as $categories)
                                <option value="{{ $categories->id }}">{{ $categories->name}}</option>
                            @endforeach
                        </select>
                        <div class="form__error">@error('category') {{ $message }} @enderror </div>
                    </div>
                    <div>
                        <lable for="filter">Название товара:
                            <input class="product-header__text" type="text" name="filter">
                        </lable>
                        <button class="product-header__button">Поиск</button>
                    </div>
                </form>
            </div>
        </div>
        <form action="{{ route('catalogClear') }}" method="post">
            @csrf
            <button class="product-header__button">Сбросить фильтр</button>
        </form>
    </div>
    <div class="content-product">
        @foreach($product as $products)
            <div class="card-product">
                <div class="card">

                    <img class="card-product__img" src="{{ asset('/public/storage/' . $products->pathPhoto)}}"
                         alt="img product">
                    <div class="card-product__content">
                        <p class="card-product__price">Цена: {{ $products->price }}</p>
                        <p class="card-product__name">{{ $products->name }}</p>
                        <p class="card-product__count">Кол-во: {{ $products->count }}</p>
                    </div>
                </div>
                @if(\Illuminate\Support\Facades\Auth::user())
                    <form action="{{ route('product.destroy', ['product' => $products->id]) }}" method="post">
                        @csrf
                        <button class="btn-svg" onmouseover="background();"
                                onmouseout="no_background();" onclick="return confirm('Вы точно хотите удалить продукт?');">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <line class="btn-svg__line" x1="7" x2="25" y1="7" y2="25"/>
                                    <line class="btn-svg__line" x1="7" x2="25" y1="25" y2="7"/>
                                </g>
                            </svg>
                        </button>
                    </form>
                    <a class="btn-svg-edit" href="{{ route('product.edit', $products->id) }}">
                        <img src="public/img/edit.png" alt="" width="40px" height="40px">
                    </a>
                @endif
            </div>
        @endforeach

    </div>
    <div class="pagination-page">    {{ $product->render() }}     </div>
@endsection
