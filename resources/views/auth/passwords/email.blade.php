@extends('auth.auth')
@section('content')
    <div class="col-lg-7 right">
        <div>
            <h2 class="title">Восстановление пароля</h2>
            <p class="recover">Для восстановления, введите ваш  email, который вы использовали при регистрации. Вам придёт письмо.
            </p>
            <form method="POST" action="{{ route('password.email') }}" class="form">
                @csrf
                <input name="email" type="email" class="mail" placeholder="E-mail">
                <div class="capcha">
                    <div class="g-recaptcha" data-sitekey="6LfABb8UAAAAACY7pgOvX2W9Gc3azoR1NtjxlJdc"></div>
                    <br/>
                    <button class="restore">Восстановить</button>
                </div>
            </form>
            <a href="{{route('index')}}" class="bottom__text bottom__text-back">
                << Go Back</a></div>
    </div>
@endsection
@section('scripts')

    <script src="/js/particles.min.js">
    </script>
    <script>
        let pasw = document.querySelector('#password')
        let email = document.querySelector('#email')

        let labelMail = document.querySelector('#wrongMail')
        let labelPass = document.querySelector('#wrongPass')
        document.addEventListener("DOMContentLoaded", function(event) {

            let pasError = pasw.getAttribute('data-error')
            let emailError = email.getAttribute('data-error')

            if (emailError == 'true') {
                labelMail.innerHTML = 'Неверные логин или пароль'
                email.classList.add('error-input')
                pasw.classList.add('error-input')
                return false
            } else {
                labelMail.innerHTML = ''
                email.classList.remove('error-input')
                pasw.classList.remove('error-input')

            }
        });
        particlesJS.load('particles-js', '/js/particles.json', function () {
            console.log('callback - particles.js config loaded');
        });
    </script>
@endsection

