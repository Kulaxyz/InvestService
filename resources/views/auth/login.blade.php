@extends('auth.auth')
@section('content')
        <div class="col-lg-7 right">
            <div>
                <h2 class="title">Sign in</h2>
                <h3 class="subtitle">Use your FTF Account</h3>
                <form action="{{ route('login') }}" method="POST" class="form">
                    @csrf
                    <label for="email" class="error" id="wrongMail"></label>
                    <input name="email" type="email" id="email" class="mail" placeholder="E-mail" value="{{old('email')}}"
                           @error('email')
                           data-error='true'
                           @enderror
                           required id="mail-error">

                    <label for="password" class="error" id="wrongPass"></label>
                    <input name="password" type="password" id="password" class="password" placeholder="Password"
                           @error('password')
                           data-error='true'
                           @enderror
                           required>
                    <div class="capcha">
                        <div class="g-recaptcha" data-sitekey="6LfABb8UAAAAACY7pgOvX2W9Gc3azoR1NtjxlJdc"></div>
                        <br />
                    </div>
                    <div class="buttons">
                        <button class="signIn">LOGIN</button>
                        <button class="signUp" onclick="location.href='{{route('register')}}'; return false;">REGISTRATION</button>
                    </div>
                </form>
                <div class="bottom__wrap">
                    <a href="{{route('password.request')}}" class="bottom__text">Forgot your password?</a>
                    <a href="{{ route('index') }}" class="bottom__text">Still dont have an account? Open it right now!</a>
                </div>
                <a href="{{ route('wallet') }}" class="bottom__text bottom__text-back">
                    << Go Back</a> </div> </div>
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
            labelMail.innerHTML = 'Mail or password incorrect'
            email.classList.add('error-input')
            pasw.classList.add('error-input')
            return false
        } else {
            labelMail.innerHTML = ''
            email.classList.remove('error-input')
            pasw.classList.remove('error-input')

        }
    });
    particlesJS.load('particles-js', 'js/particles.json', function () {
        console.log('callback - particles.js config loaded');
    });
</script>
@endsection
