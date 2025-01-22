<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admincss/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admincss/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admincss/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admincss/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admincss/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admincss/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="{{ asset('admincss/images/logo.svg') }}" alt="logo" class="mr-2" style="height: 30px;">
                    <span class="font-weight-bold">Skydash Admin</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="container-fluid page-body-wrapper mt-5">
            @include('admin.sidebar')
            <div class="card mx-auto" style="max-width: 800px;">
                <div class="card-body">
                    <button class="btn btn-success" onclick="window.location.href='{{ url('/tambahdata') }}'">Tambah Data</button>
                    <h5 class="card-title text-center mb-4">Data Pohon Induk</h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Bulan</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($divisipohoninduk as $divisipohoninduks)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $divisipohoninduks->bulan }}</td>
                                        <td>{{ $divisipohoninduks->tahun }}</td>
                                        <td>{{ $divisipohoninduks->target }}</td>
                                        <td>{{ $divisipohoninduks->realisasi }}</td>
                                        <td>
                                            <a href="{{ url('/delete', $divisipohoninduks->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Plugins JS -->
    <script src="{{ asset('admincss/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admincss/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admincss/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/template.js') }}"></script>
</body>

</html>
