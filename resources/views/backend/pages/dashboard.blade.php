@extends('layouts.backend')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h2>Deine Marke</h2>
        <!-- Projekt Cards start -->
        <div class="brands__projects">
        @foreach($brands->all() as $brand)
            <!-- Brand Project 1 start -->
                <div class="brand__project">
                    <a href="{{route('brand.guidelines')}}" class="brand__project--link">
                        <header class="brand__project--banner" style="background-color: {{$brand->brand_color}};">
                            <div class="brand__project--images-wrapper">
                                <img class="brand__project--images" src="" alt="">
                            </div>
                        </header>
                        <div class="brand__project--content">
                            <h2>{{$brand->brand_title}}</h2>
                        </div>
                    </a>
                    <footer class="brand__project--footer">
                        <a href="{{route('brand.guidelines')}}"
                           class="brand__project--footer-link">2 Guidelines</a>
                        <a href="{{route('brand.projects')}}"
                           class="brand__project--footer-link state__disabled">Keine Projekte</a>
                    </footer>

                </div>
                <!-- Brand Project 1 end -->
            @endforeach
        </div>
    </div>
@endsection
