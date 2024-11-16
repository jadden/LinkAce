@extends('layouts.app')

@section('content')
    <div class="contact-page">
        <h3 class="mb-4">{{ $title ?? trans('linkace.contact') }}</h3>

        <div class="card mt-4">
            <div class="card-body contact-content">
                {!! \Illuminate\Support\Str::markdown($content) !!}
            </div>
        </div>
    </div>
@endsection
