@extends('layout.main')

@section('title', 'Изменение продукта')

@section('content')
    <div class="container">
        <div class="form__product form__position">
            <span class="form__title">Изменение продукта</span>
            @foreach($products as $product)
                <form action="{{ route('product.update', [$product->id]) }}" method="post" class="form__form"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form__content">
                        <input type="text" class="form__input" name="name" placeholder="Enter name"
                               value="{{ $product->name }}" required>
                        <div class="form__error">@error('name') {{ $message }} @enderror </div>
                        <select class="form__input" name="category" required>
                            @foreach($category as $categories)
                                <option value="{{ $categories->id }}">{{ $categories->name}}</option>
                            @endforeach
                        </select>
                        <div class="form__error">@error('category') {{ $message }} @enderror </div>
                        <input type="text" class="form__input" name="price" placeholder="Enter price"
                               value="{{ $product->price }}" required>
                        <div class="form__error">@error('price') {{ $message }} @enderror </div>
                        <input type="text" class="form__input" name="count" placeholder="Enter count"
                               value="{{ $product->count }}" required>
                        <div class="form__error">@error('count') {{ $message }} @enderror </div>

                        <div class="button">
                            <button class="form__button form__button_hover" onclick="return confirm('Вы точно хотите изменить продукт?');">Изменить</button>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection
