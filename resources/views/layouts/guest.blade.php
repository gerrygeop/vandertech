@extends('layouts.main-layout')

@section('content')
    <main class="bg-pattern bg-slate-100">
        <div class="max-w-7xl mx-auto">
            <x-navbar />
    
            {{ $slot }}
    
            @include('_footer')
        </div>
    </main>
@endsection
