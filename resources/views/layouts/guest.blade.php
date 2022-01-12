@extends('layouts.main-layout')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-800">
        <x-navbar />

        {{ $slot }}
    </div>
@endsection
