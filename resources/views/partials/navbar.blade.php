<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="{{route('front.home')}}" class="nav-item nav-link {{(request()->is('/')) ? 'active' : ''}}">Home</a>
        <a href="{{route('front.about')}}" class="nav-item nav-link {{(request()->is('about')) ? 'active' : ''}}">About</a>
        <a href="{{route('front.service')}}" class="nav-item nav-link {{(request()->is('service')) ? 'active' : ''}}">Services</a>
        <a href="{{route('front.package')}}" class="nav-item nav-link {{(request()->is('package')) ? 'active' : ''}}">Packages</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle
            {{(request()->is('destination')) ? 'active' : ''}}
            {{(request()->is('booking')) ? 'active' : ''}}
            {{(request()->is('travel_guide')) ? 'active' : ''}}
            {{(request()->is('front.testimonai')) ? 'active' : ''}}    
            " 
            data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu m-0">
                <a href="{{route('front.destination')}}" class="dropdown-item {{(request()->is('destination')) ? 'active' : ''}}">Destination</a>
                <a href="{{route('front.booking')}}" class="dropdown-item {{(request()->is('booking')) ? 'active' : ''}}">Booking</a>
                <a href="{{route('front.travel_guide')}}" class="dropdown-item {{(request()->is('travel_guide')) ? 'active' : ''}}">Travel Guides</a>
                <a href="{{route('front.testimonail')}}" class="dropdown-item {{(request()->is('testimonai')) ? 'active' : ''}}">Testimonial</a>
            </div>
        </div>
        <a href="{{route('front.contact')}}" class="nav-item nav-link {{(request()->is('contact')) ? 'active' : ''}}">Contact</a>
    </div>
    <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
</div>

