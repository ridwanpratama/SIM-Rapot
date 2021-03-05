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