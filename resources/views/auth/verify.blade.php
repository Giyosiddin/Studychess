@extends('layouts.front')

@section('content')
<section class="general_main for_bg_color" style="background-image: url('images/header-bg.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ __('Регистрация') }}</h1>
        </div>
    </div>
</section>
<section class="registration_block">
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Подтвердите свой электронной почты') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения. Если вы не получили письмо') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}" style="padding: 0">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы запросить еще раз') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
