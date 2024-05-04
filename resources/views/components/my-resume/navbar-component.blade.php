<div>
    <nav id="navbar" class="navbar nav-menu">
        <ul>
            @foreach ($navbars as $nav)
                <li><a href="{{ $nav->slug }}" class="nav-link scrollto"><i class="{{ $nav->icon }}"></i>
                        <span>{{ $nav->name }}</span></a>
            @endforeach
        </ul>
    </nav><!-- .nav-menu -->
</div>
