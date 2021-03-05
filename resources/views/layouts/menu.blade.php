<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="c-sidebar-nav-icon cil-account-logout"></i>Logout<span
                    class="c-sidebar-nav-icon"></span></a></li>
        <form action="{{route('logout')}}" id="logout-form" method="POST">
            @csrf
        </form>

<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
        href="#">
        <i class="c-sidebar-nav-icon cil-book"></i> Mapel</a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('mapel.index')}}"><span
                    class="c-sidebar-nav-icon"></span> List Mapel</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('mapel.create')}}"><span
                    class="c-sidebar-nav-icon"></span> Tambah Mapel</a></li>
      
    </ul>
</li>
