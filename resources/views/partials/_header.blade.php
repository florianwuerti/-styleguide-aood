<!-- Header start -->
<header id="masthead">
    <div class="navbar">
        <div class="branding">
            <img class="branding__logo" src="{{asset('images/logo.svg')}}" alt="Agentur OnOff Design Styleguide">
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
<!-- Header end -->