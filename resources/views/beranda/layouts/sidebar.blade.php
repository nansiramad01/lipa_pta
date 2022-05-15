<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>PORTAL LIPA PTA</h4>
        </div>

        <a class="navbar-brand ml-4" href="https://www.pta-pekanbaru.go.id/" target="_blank">
            <img src="{{ asset('img/logo_pta1.png') }}" height="240">
        </a>


        <ul class="list-unstyled components ml-1">

            <li>
                <a href="/"> <i class="bi bi-speedometer2"> </i> Beranda</a>
            </li>
            <li>
                <a href="/profil"> <i class="bi bi-person-fill"></i> Profil Pengguna</a>
            </li>

            @role('user')
            <li>
                <a href="/bulanlaporan"> <i class="bi bi-list-task"></i> Kirim Laporan </a>
            </li>
            <li>
                <a href="#"><i class="bi bi-list-task"></i> Monitoring Laporan </a>
            </li>
            @endrole


            @role('operator')
            <li>
                <a href="/rk1"><i class="bi bi-clipboard"></i>Rekapitulasi</a>
            </li>

            <li>
                <a href="#"> Perbandingan Semua PA</a>
            </li>
            @endrole


            @role('admin')
            <li>
                <a href="/rk1"><i class="bi bi-clipboard"></i>Rekapitulasi</a>
            </li>

            <li>
                <a href="#"> Perbandingan Semua PA</a>
            </li>

            <li>
                <a href="/tambahusers"> <i class="bi bi-person-plus-fill"></i> Tambahkan Pengguna</a>
            </li>
            @endrole


        </ul>
    </nav>