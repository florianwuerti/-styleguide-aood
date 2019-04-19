@section('page_title', 'Dashboard')
@section('page_class', 'backend')

@include('partials._head')

@include('backend.partials._header')

<main id="app">
    @yield('content')
</main>
@include('partials._footer')