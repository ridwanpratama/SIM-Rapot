<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('home') ? 'c-active' : '' }}" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
</li>
<li class="c-sidebar-nav-title">Data Master</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('siswa') ? 'c-active' : '' }}" href="{{ route('siswa.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Siswa
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('mapel') ? 'c-active' : '' }}" href="{{ route('mapel.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Mapel
    </a>
</li>

<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="c-sidebar-nav-icon cil-account-logout"></i>Logout<span
                    class="c-sidebar-nav-icon"></span></a></li>
        <form action="{{route('logout')}}" id="logout-form" method="POST">
            @csrf
        </form>
