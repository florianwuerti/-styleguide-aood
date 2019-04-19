<!-- Header start -->
<header id="masthead">
    <div class="navbar">
        @if(Route::current()->getName() === 'template.user.backend')
            <div class="branding">
                <img class="branding__logo" src="{{asset('images/logo.svg')}}" alt="">
            </div>
        @else
            <nav class="navbar__nav" role="navigation">
                <ul class="navbar__list">
                    <li class="navbar__list--item {{ Request::is('/') ? "navbar__list--item-active" : "" }}">
                        <a href="{{Route('template.user.backend', $user->id)}}" class="navbar__list--itemLink">Companyname</a>
                    </li>
                </ul>
            </nav>
    @endif
    <!-- Main Nav start -->
        <a href="#" class="btn btn--primary" title="Neue Marke erstellen">Neue Marke</a>
        <!-- Main Nav end -->
    </div>
</header>
<!-- Header end -->