@extends('auth.auth')
@section('content')

    <div class="col-lg-7 right">
            <div>
                <h2 class="title">Регистрация</h2>
                <form action="{{route('register')}}" method="POST" class="form form-2">
                    @csrf
                    <label for="name" class="error" id="wrongName"></label>
                    <input id="name" name="name" type="text" class="name" placeholder="Имя" value="{{old('name')}}"
                           @error('name')
                           data-error="true"
                           @enderror
                           required>
                    <label for="email" class="error" id="wrongMail"></label>
                    <input name="email" type="email" id="email" class="mail" placeholder="E-mail" value="{{old('email')}}"
                        @error('email')
                            data-error='true'
                        @enderror
                    required>

                    <label for="passw1" class="error" id="wrongPass"></label>
                    <input name="password" type="password" id="passw1" class="password" placeholder="Пароль"
                       @error('password')
                         data-error='true'
                       @enderror
                       required>
                    <input name="password_confirmation" type="password" id="passw2" class="password"
                       @error('password-confirm')
                           data-error="true"
                       @enderror
                       placeholder="Повторите пароль" required>
                    <label for="phoneNumb" class="error" id="wrongPhone"></label>
                    <input name="phone" type="text" class="phone" placeholder="Номер телефона" value="{{old('phone')}}"
                       @error('phone')
                           data-error="true"
                       @enderror
                       id="phoneNumb" required>

{{--                    <div class="capcha">--}}
{{--                        <div class="g-recaptcha" data-sitekey="6LfABb8UAAAAACY7pgOvX2W9Gc3azoR1NtjxlJdc"></div>--}}
{{--                        <br />--}}
{{--                    </div>--}}

                    <div class="check">
                        <input type="checkbox" id="checkbox" required>
                        <label id='label' for="checkbox" class="checkbox">
                            Я согласен с <a href="{{ route('rules') }}">правилами</a> данного сервиса
                        </label>
                    </div>
                    <button type="submit" class="register">
                        Зарегистрироваться
                    </button>
                </form>
                <a href="{{ route('index') }}" class="bottom__text bottom__text-back">
                    << Назад</a> </div> </div>
@endsection
@section('scripts')

    <script src="./js/particles.min.js">
</script>
<script>
    particlesJS.load('particles-js', 'js/particles.json', function () {
        console.log('callback - particles.js config loaded');
    });
</script>
<script>
    let inp = document.querySelector('#phoneNumb');

    // Проверяем фокус
    inp.addEventListener('focus', _ => {
        // Если там ничего нет или есть, но левое
        if (!/^\+\d*$/.test(inp.value)) {
            inp.value = '+';
        }
        // То вставляем знак плюса как значение
    });

    inp.addEventListener('keypress', e => {
        // Отменяем ввод не цифр
        if (!/\d/.test(e.key))
            e.preventDefault();
    });



    let pas1 = document.querySelector('#passw1')
    let pas2 = document.querySelector('#passw2')
    let email = document.querySelector('#email')
    let phone = document.querySelector('#phoneNumb')
    let name = document.querySelector('#name')


    let labelMail = document.querySelector('#wrongMail')
    let labelPass = document.querySelector('#wrongPass')
    let labelPhone = document.querySelector('#wrongPhone')
    let labelName = document.querySelector('#wrongName')


    document.addEventListener("DOMContentLoaded", function(event) {

        let pasError = pas1.getAttribute('data-error')
        let emailError = email.getAttribute('data-error')
        let phoneError = phone.getAttribute('data-error')
        let nameError = name.getAttribute('data-error')

        if (emailError == 'true') {
            labelMail.innerHTML = 'Неверный Email или уже занят'
            email.classList.add('error-input')
            return false
        } else {
            labelMail.innerHTML = ''
            email.classList.remove('error-input')
        }
        if (phoneError == 'true') {
            labelPhone.innerHTML = 'Неверный номер телефона, требуемый формат: +XXX-XXX-XXXX (без тире)'
            phone.classList.add('error-input')
            return false
        } else {
            labelPhone.innerHTML = ''
            phone.classList.remove('error-input')
        }

        if (nameError == 'true') {
            labelName.innerHTML = 'Неверное имя'
            name.classList.add('error-input')
            return false
        } else {
            labelName.innerHTML = ''
            name.classList.remove('error-input')
        }

        if (pasError == 'true') {
            console.log(labelPass, pasError)
            labelPass.innerHTML = 'Пароли не совпадают'
            pas1.classList.add('error-input')
            pas2.classList.add('error-input')
            return false
        } else {
            labelPass.innerHTML = ''
            pas1.classList.remove('error-input')
            pas2.classList.remove('error-input')
        }
    });
 </script>
@endsection
