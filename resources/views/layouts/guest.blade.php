@extends('layouts.main-layout')

@section('content')
    <div class="max-w-7xl mx-auto">
        <x-navbar />

        {{ $slot }}

        @include('_footer')
    </div>
@endsection
