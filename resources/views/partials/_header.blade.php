<!-- Header start -->
@auth
    <a class="co-powerbar__login " style="background: rgb(11, 38, 49);color: #fff" href="{{route('template.user.backend',$user->id)}}">Profil</a>
@else
    <a class="co-powerbar__login " style="background: rgb(11, 38, 49);color: #fff" href="{{Route('login')}}"><i
                class="icon-lock co-powerbar__icon"></i></a>
@endauth
@if (\Request::is('template'))
    <header id="masthead" class="has__thumbnail"
            style="background-image: url('');">
        <div class="navbar">
            <a href="{{Route('start')}}">
                <div class="branding">
                    <img class="branding__logo" src="{{asset('images/logo.svg')}}" alt="">
                </div>
            </a>
            <!-- Main Nav start -->
        @include('partials._topnav')
        <!-- Main Nav end -->
        </div>
        <div class="header-hero">
            <h1 class="header-hero__heading">Company {{ config('app.name')}}</h1>
            <p class="header-hero__subheading">Company Slogen</p>
        </div>
    </header>
@else
    <header id="masthead">
        <div class="navbar">
            <div class="branding">
                <img class="branding__logo" src="{{asset('images/logo.svg')}}" alt="">
            </div>
            <!-- Main Nav start -->
        @include('partials._topnav')
        <!-- Main Nav end -->
        </div>
        <div class="header-hero">
            <h1 class="header-hero__heading">Company {{ config('app.name')}}</h1>
            <p class="header-hero__subheading">Company Slogen</p>
        </div>
    </header>
@endif
<!-- Header end -->