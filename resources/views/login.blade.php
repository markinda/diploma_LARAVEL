@extends('layout.main')

@section('title', 'Авторизация')

@section('content')
   <div class="container">
       <div class="form form__position">
           <span class="form__title">Авторизация</span>
           <form action="{{ route('auth.store') }}" method="post" class="form__form">
               @csrf
               <div class="form__content">
                   <input type="text" class="form__input" name="login" placeholder="Login" required autofocus>

                   <input type="password" class="form__input" name="password" placeholder="Password" required>
                   <div class="button">
                       <button class="form__button form__button_hover">Войти</button>
                   </div>
               </div>
           </form>
       </div>
   </div>
@endsection
