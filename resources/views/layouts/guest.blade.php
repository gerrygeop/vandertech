@extends('layouts.main-layout')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-800">
        <x-navbar />

        {{ $slot }}
    </div>
@endsection
