<div class="contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area show-for-small-only">
            <li class="name">
                <h1><a href="#">Boris Vargas</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>


        <section class="top-bar-section ">
            <!-- Right Nav Section -->
            <ul class="right show-for-medium-up">
                <li><a href="#">facebook</a></li>
                <li><a href="#">twitter</a></li>
                <li><a href="#">Behance</a></li>

            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li class="{{ set_active('/') }}"><a href="/">Home</a></li>
                <li class="{{ set_active('about') }}"><a href="about">About</a></li>
                <li class="{{ set_active('work') }}"><a href="work">Work</a></li>
                <li class="{{ set_active('services') }}"><a href="services">Services</a></li>
                <li class="{{ set_active('contact') }}"><a href="contact">Contact</a></li>
            </ul>
        </section>
    </nav>
</div>