<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="{{route('front.home')}}" class="nav-item nav-link {{(request()->is('/')) ? 'active' : ''}}">{{ trans('menu.home') }}</a>
        <a href="{{route('front.about')}}" class="nav-item nav-link {{(request()->is('about')) ? 'active' : ''}}">{{ trans('menu.about') }}</a>
        <a href="{{route('front.service')}}" class="nav-item nav-link {{(request()->is('service')) ? 'active' : ''}}">{{ trans('menu.services') }}</a>
        <a href="{{route('front.package')}}" class="nav-item nav-link {{(request()->is('package')) ? 'active' : ''}}">{{ trans('menu.packages') }}</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle
            {{(request()->is('destination')) ? 'active' : ''}}
            {{(request()->is('booking')) ? 'active' : ''}}
            {{(request()->is('travel_guide')) ? 'active' : ''}}
            {{(request()->is('front.testimonai')) ? 'active' : ''}}    
            " 
            data-bs-toggle="dropdown">{{ trans('menu.pages') }}</a>
            <div class="dropdown-menu m-0">
                <a href="{{route('front.destination')}}" class="dropdown-item {{(request()->is('destination')) ? 'active' : ''}}">{{ trans('menu.destination') }}</a>
                <a href="{{route('front.booking')}}" class="dropdown-item {{(request()->is('booking')) ? 'active' : ''}}">{{ trans('menu.booking') }}</a>
                <a href="{{route('front.travel_guide')}}" class="dropdown-item {{(request()->is('travel_guide')) ? 'active' : ''}}">{{ trans('menu.guides') }}</a>
                <a href="{{route('front.testimonail')}}" class="dropdown-item {{(request()->is('testimonai')) ? 'active' : ''}}">{{ trans('menu.testimonail') }}</a>
            </div>
        </div>

        <a href="{{route('front.contact')}}" class="nav-item nav-link {{(request()->is('contact')) ? 'active' : ''}}">{{ trans('menu.contact') }}</a>
        <?php  
        $flag = app()->getlocale();
                if($flag=="en"){
                    $flag="us";
                }
            ?>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle               
            " data-bs-toggle="dropdown"><i
                    class="flag-icon flag-icon-{{ $flag=='kh'?'kh':'' }}{{ $flag=='us'?'us':'' }} mr-2"></i> {{
                $flag=='kh'?'ភាសាខ្មែរ':'' }}{{
                $flag=='us'?"English":'' }}</a>
            <div class="dropdown-menu m-0">
                <a href="{{url('lang/kh')}}" class="dropdown-item {{ $flag=='kh'?'active':'' }}                    
                    "><i class="flag-icon flag-icon-kh mr-2"></i> ភាសាខ្មែរ</a>
                <a href="{{url('lang/en')}}" class="dropdown-item {{ $flag=='us'?'active':'' }}"><i
                        class="flag-icon flag-icon-us mr-2"></i> English</a>
            </div>
        </div>
    </div>
    <a href="{{route('register')}}" class="btn btn-primary rounded-pill py-2 px-4">{{ trans('menu.register') }}</a>
</div>



