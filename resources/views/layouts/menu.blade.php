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

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('guru') ? 'c-active' : '' }}" href="{{ route('guru.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Guru
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('rayon') ? 'c-active' : '' }}" href="{{ route('rayon.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Rayon
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('jurusan') ? 'c-active' : '' }}" href="{{ route('jurusan.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Jurusan
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('absen') ? 'c-active' : '' }}" href="{{ route('absen.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Absen
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('upd') ? 'c-active' : '' }}" href="{{ route('upd.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Nilai UPD
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{Request::is('detail_upd') ? 'c-active' : '' }}" href="{{ route('detail.index') }}"> 
        <i class="c-sidebar-nav-icon cil-people"></i>Data UPD
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('user') ? 'c-active' : '' }}" href="{{ route('user.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data User
    </a>
</li>

<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="c-sidebar-nav-icon cil-account-logout"></i>Logout<span class="c-sidebar-nav-icon"></span></a></li>
<form action="{{route('logout')}}" id="logout-form" method="POST">
    @csrf
</form>
