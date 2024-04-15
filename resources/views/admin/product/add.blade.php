@extends('layout.main')

@section('title', 'Добавление продукта')

@section('content')
    <div class="container">
        <div class="form__product form__position">
            <span class="form__title">Добавление продукта</span>
            <form action="{{ route('admin.store') }}" method="post" class="form__form" enctype="multipart/form-data">
                @csrf
                <div class="form__content">
                    <input type="text" class="form__input" name="name" placeholder="Name" required>
                    <div class="form__error">@error('name') {{ $message }} @enderror </div>
                    <select class="form__input" name="category"  required>
                        @foreach($category as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->name}}</option>
                        @endforeach
                    </select>
                    <div class="form__error">@error('category') {{ $message }} @enderror </div>
                    <input type="text" class="form__input" name="price" placeholder="Price" required>
                    <div class="form__error">@error('price') {{ $message }} @enderror </div>
                    <input type="text" class="form__input" name="count" placeholder="Count" required>
                    <div class="form__error">@error('count') {{ $message }} @enderror </div>
                        <div class="form__images">
                            <svg class="form__svg form__svg_input" width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.0754 3.80636L22.2739 1.00445C21.0462 -0.223489 19.0371 -0.223489 17.8094 1.00445L5.44385 13.372C4.73281 14.0832 4.33332 15.0478 4.33332 16.0535V17.4158C4.33332 18.6126 5.30339 19.5828 6.5 19.5828H7.86211C8.86768 19.5828 9.83211 19.1832 10.5432 18.4721L21.1249 7.88856C21.3365 7.67701 21.3365 7.33398 21.1249 7.12243L20.3591 6.35644C20.1475 6.14489 19.8046 6.14489 19.593 6.35644L9.01154 16.9397C8.7067 17.2446 8.29329 17.4158 7.86221 17.4158H6.5V16.0535C6.5 15.6223 6.67129 15.2087 6.97618 14.9038L19.3413 2.53662C19.7265 2.15135 20.3568 2.15135 20.742 2.53662L23.5435 5.33853C23.7249 5.51997 23.8333 5.7819 23.8333 6.03901C23.8333 6.29611 23.7249 6.55799 23.5435 6.73948L9.32882 20.9564C8.82086 21.4644 8.13191 21.7498 7.41356 21.7498H3.25C2.6517 21.7498 2.16668 21.2647 2.16668 20.6663V16.5021C2.16668 15.7836 2.45207 15.0945 2.96004 14.5865L15.3909 2.15363C15.6025 1.94208 15.6025 1.59905 15.3909 1.3875L14.6251 0.621511C14.4135 0.409956 14.0706 0.409956 13.859 0.621511L1.42771 13.0547C0.513551 13.9691 0 15.2091 0 16.5021V20.6663C0 22.4616 1.45509 23.9169 3.25 23.9169H7.41356C8.70634 23.9169 9.94617 23.4032 10.8603 22.4889L25.0754 8.27161C25.6631 7.68381 26 6.87009 26 6.03896C26 5.20782 25.6631 4.3941 25.0754 3.80636Z" fill="#262626"/>
                            </svg>
                            <span id="file-name">прикрепить фото</span>
                            <input type="file" class="form__input form__input_hidden" id="pathPhoto" name="pathPhoto" placeholder="Enter photo" required>
                        </div>
                    </label>
                    <div class="form__error">@error('pathPhoto') {{ $message }} @enderror </div>
                    <div class="button">
                        <button class="form__button form__button_hover">Добавить</button>
                    </div>
                    <div class="form__error">@error('add') {{ $message }} @enderror </div>
                </div>
            </form>
        </div>
    </div>
@endsection
