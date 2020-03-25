@extends('auth.auth')
@section('content')
    <div class="col-lg-7 right">
        <div>
            <h2 class="title">Новый пароль</h2>
            <form action="{{ route('password.update') }}" method="POST" class="form">
                @csrf
                <label for="email" class="error" id="wrongMail"></label>
                <input name="email" type="email" id="email" readonly="true" class="mail" placeholder="E-mail" value="{{ $email }}"
                       @error('email')
                       data-error='true'
                       @enderror
                       required id="mail-error">

                <label for="password" class="error" id="wrongPass"></label>
                <input name="password" type="password" id="password" class="password" placeholder="Пароль"
                       @error('password')
                       data-error='true'
                       @enderror
                       required>
                <input name="password_confirmation" type="password" id="password" class="password" placeholder="Пароль ещё раз"
                       @error('password')
                       data-error='true'
                       @enderror
                       required>
                <div class="buttons">
                    <button type="submit" class="signIn">Сохранить</button>
                    <button class="signUp" onclick="location.href='{{route('register')}}'; return false;">Регистрация</button>
                </div>
            </form>
            <div class="bottom__wrap">
                <a href="{{ route('index') }}" class="bottom__text">До сих пор нет аккаунта? Откройте его прямо сейчас!</a>
            </div>
            <a href="{{route('index')}}" class="bottom__text bottom__text-back">
                << Go Back</a> </div> </div>
@endsection
