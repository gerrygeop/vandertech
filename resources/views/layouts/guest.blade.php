@extends('layouts.main-layout')

@section('content')
    <div class="max-w-7xl mx-auto">
        <x-navbar />

        {{ $slot }}

        @include('partials._footer-section')
    </div>
@endsection
