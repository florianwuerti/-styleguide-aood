@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header">Deine Marke</h1>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif
                    <!-- Projekt Cards start -->
                        <div class="brands__projects">
                            <!-- Brand Project 1 start -->
                            <div class="brand__project">
                                <a href="{{route('brand.guidelines')}}" class="brand__project--link">
                                    <header class="brand__project--banner">
                                        <div class="brand__project--images-wrapper">
                                            <img class="brand__project--images" src="" alt="">
                                        </div>
                                    </header>
                                    <div class="brand__project--content">
                                        <h2>Deine Marke 1</h2>
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
                            <!-- Brand Project 2 start -->
                            <div class="brand__project">
                                <a href="{{route('brand.guidelines')}}" class="brand__project--link">
                                    <header class="brand__project--banner">
                                        <div class="brand__project--images-wrapper">
                                            <img class="brand__project--images" src="" alt="">
                                        </div>
                                    </header>
                                    <div class="brand__project--content">
                                        <h2>Deine Marke 2</h2>
                                    </div>
                                </a>
                                <footer class="brand__project--footer">
                                    <a href="{{route('brand.guidelines')}}"
                                       class="brand__project--footer-link">5 Guidelines</a>
                                    <a href="{{route('brand.projects')}}"
                                       class="brand__project--footer-link state__disabled">Keine Projekte</a>
                                </footer>

                            </div>
                            <!-- Brand Project 2 end -->
                            <!-- Brand Project 3 start -->
                            <div class="brand__project">
                                <a href="{{route('brand.guidelines')}}" class="brand__project--link">
                                    <header class="brand__project--banner">
                                        <div class="brand__project--images-wrapper">
                                            <img class="brand__project--images" src="" alt="">
                                        </div>
                                    </header>
                                    <div class="brand__project--content">
                                        <h2>Deine Marke 3</h2>
                                    </div>
                                </a>
                                <footer class="brand__project--footer">
                                    <a href="{{route('brand.guidelines')}}"
                                       class="brand__project--footer-link">1 Guidelines</a>
                                    <a href="{{route('brand.projects')}}"
                                       class="brand__project--footer-link state__disabled">Keine Projekte</a>
                                </footer>
                            </div>
                            <!-- Brand Project 3 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
