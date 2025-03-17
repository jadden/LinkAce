@extends('layouts.bookmarklet')

@section('content')
    @if(config('auth.sso.regular_login_disabled') !== true)
        @include('auth.login-form')
    @endif
    @if(config('auth.sso.enabled') === true)
        @include('auth.oauth')
    @endif
@endsection
