@include('partials._head')

@if (\Request::is('login'))
    @include('partials.admin._header')
@else
    @include('partials._header')
    <main id="app">
        @yield('content')
    </main>
@endif

@include('partials._footer')