<nav class="navbar__nav" role="navigation">
    <ul class="navbar__list">
        <li class="navbar__list--item {{ Request::is('/') ? "navbar__list--item-active" : "" }}">
            <a href="{{Route('start')}}" class="navbar__list--itemLink">Company Styleguide</a>
        </li>
        <li class="navbar__list--item {{ Request::is('template') ? "navbar__list--item-active" : "" }}">
            <a href="{{Route('template.template')}}" class="navbar__list--itemLink">Template</a>
        </li>
    </ul>
</nav>