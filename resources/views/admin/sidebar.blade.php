<nav class="sidebar sidebar-offcanvas bg-dark text-white" id="sidebar">
    <ul class="nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link text-white" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title ml-2">Dashboard</span>
            </a>
        </li>


        <!-- Data Pohon Induk -->
        <li class="nav-item">
            <a class="nav-link text-white" data-toggle="collapse" href="{{ url('/show') }}" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title ml-2">Data Pohon Induk</span>
                <i class="menu-arrow ml-auto"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pages/forms/basic_elements.html">Basic Elements</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Tambah Data Pohon Induk -->
        <li class="nav-item">
            {{-- <a class="nav-link text-white" data-toggle="collapse" href="{{ url('tambahdata') }}" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title ml-2">Tambah Data Pohon Induk</span>
                <i class="menu-arrow ml-auto"></i>
            </a> --}}
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pages/charts/chartjs.html">ChartJs</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link text-white" data-toggle="collapse" href="{{ url('chart') }}" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title ml-2">Laporan</span>
                <i class="menu-arrow ml-auto"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pages/tables/basic-table.html">Basic Table</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
