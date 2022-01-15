@extends('layouts.main-layout')

@section('content')

    <div class="min-h-screen bg-gray-100 flex flex-col lg:flex-row">

        <div class="block lg:hidden">
            @include('layouts.navigation')
        </div>
        <div class="hidden lg:block">
            @include('layouts.sidebar')
        </div>

        <div class="w-full">
            <!-- Page Heading -->
            <header class="bg-white lg:bg-transparent border-b">
                <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">

                        @if ($header)
                            <h2 class="font-medium text-xl text-gray-600 leading-tight">
                                {{ $header }}
                            </h2>
                        @endif

                        <div class="hidden lg:flex lg:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>
            
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
            
                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>

                    </div>
                </div>
            </header>
    
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    
@endsection

@push('scripts')
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endpush
