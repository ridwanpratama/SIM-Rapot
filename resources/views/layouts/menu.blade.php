<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('home') ? 'c-active' : '' }}" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
</li>

<li class="c-sidebar-nav-title">Data Akademik</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('siswa') ? 'c-active' : '' }}" href="{{ route('siswa.index') }}">
        <i class="c-sidebar-nav-icon cil-people"></i>Data Siswa
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('mapel') ? 'c-active' : '' }}" href="{{ route('mapel.index') }}">
        <i class="c-sidebar-nav-icon cil-book"></i>Data Mapel
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('guru') ? 'c-active' : '' }}" href="{{ route('guru.index') }}">
        <i class="c-sidebar-nav-icon cil-school"></i>Data Guru
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('jurusan') ? 'c-active' : '' }}" href="{{ route('jurusan.index') }}">
        <i class="c-sidebar-nav-icon cil-library-building"></i>Data Jurusan
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('absen') ? 'c-active' : '' }}" href="{{ route('absen.index') }}">
        <i class="c-sidebar-nav-icon cil-description"></i></i>Data Absen
    </a>
</li>

<li class="c-sidebar-nav-title">Kelola Nilai</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('nilai.create') ? 'c-active' : '' }}" href="{{ route('nilai.create') }}">
        <i class="c-sidebar-nav-icon cil-description"></i></i>Input Nilai
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('raport.index') ? 'c-active' : '' }}" href="{{ route('raport.index') }}">
        <i class="c-sidebar-nav-icon cil-description"></i></i>Kelola Raport
    </a>
</li>

<li class="c-sidebar-nav-title">Data Non Akademik</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('rayon') ? 'c-active' : '' }}" href="{{ route('rayon.index') }}">
        <i class="c-sidebar-nav-icon cil-folder"></i>Data Rayon
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{Request::is('detail_upd') ? 'c-active' : '' }}" href="{{ route('detail.index') }}"> 
        <i class="c-sidebar-nav-icon cil-notes"></i>Data UPD
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('upd') ? 'c-active' : '' }}" href="{{ route('upd.index') }}">
        <i class="c-sidebar-nav-icon cil-list-rich"></i>Data Nilai UPD
    </a>
</li>

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('user') ? 'c-active' : '' }}" href="{{ route('user.index') }}">
        <i class="c-sidebar-nav-icon cil-settings"></i>Data User
    </a>
</li>

<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="c-sidebar-nav-icon cil-account-logout"></i>Logout<span class="c-sidebar-nav-icon"></span></a></li>
<form action="{{route('logout')}}" id="logout-form" method="POST">
    @csrf
</form>
