<!-- contain-to-grid: layout for nav -->
<div class="contain-to-grid">
<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area show-for-small-only">
        <li class="name"></li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section ">
        <!-- Left Nav Section -->
        <ul class="left">
            <li data-async="home" class="{{ set_active('/') }}"><a class="nav-link" href="/">Portfolio</a></li>
            <li data-async="about" class="{{ set_active('about') }}"><a class="nav-link" href="about">About</a></li>
            <li data-async="contact" class="{{ set_active('contact') }}"><a class="nav-link" href="contact">Contact</a></li>
        </ul>

        <div class="show-for-small-only left" style="width: 100%;">
            <hr style="width: 15px; margin-right: auto; margin-left: auto"/>
        </div>
        <!-- Right Nav Section -->
        <ul class="right">
            <li><a class="topbar-social-link" href="#"><object data="{{ asset('assets/images/facebook-name.svg') }}" type="image/svg+xml"></object></a></li>
            <li><a class="topbar-social-link" href="#"><object data="{{ asset('assets/images/twitter-name.svg') }}" type="image/svg+xml"></object></a></li>
            <li><a class="topbar-social-link" href="#"><object data="{{ asset('assets/images/behance-name.svg') }}" type="image/svg+xml"></object></a></li>

        </ul>
    </section>
</nav>
</div>