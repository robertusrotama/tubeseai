<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Pelatihan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Human Resources <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <span>Data Pelatihan Pegawai</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Pelatihan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/InputPelatihan" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Input Data Pelatihan</span>
                </a>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/ReadPelatihan" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Lihat Data Pelatihan</span>
                </a>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/UpdatePelatihan" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Ubah Data Pelatihan</span>
                </a>
                <li class="nav-item">
            <a class="nav-link collapsed" href="/DeletePelatihan" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Hapus Data Pelatihan</span>
                </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Pegawai
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/Input" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Input Data Pegawai</span>
                </a>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/Read" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Lihat Data Pegawai</span>
                </a>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/Update" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Ubah Data Pegawai</span>
                </a>
                <li class="nav-item">
            <a class="nav-link collapsed" href="/Delete" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Hapus Data Pegawai</span>
                </a>

        </ul>
        <!-- End of Sidebar -->
    <title>List Data Pelatihan</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
    
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                        <h2 class="form-title">List Data Pegawai</h2>
                        <form action="" method="post">

<table border="1" width="600px">
    <thead class = "thead-dark">
    <tr>
        <th>ID Pelatihan</th>
        <th>Nama Pelatihan</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Tempat</th>
        <th>Jumlah Pegawai</th>
        <th>Marketing</th>
        <th>HR</th>
        <th>Finance</th>
        <th>Operasional</th>
        <th>Penyelenggara</th>
        <th>Biaya</th>
        <th>Status</th>
    </tr> 
    </thead>
    <tbody>
        @foreach ($datapelatihans as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_pelatihan }}</td> 
        <td>{{ $data->tanggal_pelatihan }}</td>
        <td>{{ $data->waktu_pelatihan }}</td>
        <td>{{ $data->tempat_pelatihan }}</td>
        <td>{{ $data->jumlah_pegawai }}</td>
        <td>{{ $data->Marketing }}</td>
        <td>{{ $data->HR }}</td>
        <td>{{ $data->Finance }}</td>
        <td>{{ $data->Operasional }}</td>
        <td>{{ $data->penyelenggara_pelatihan }}</td>
        <td>{{ $data->anggaran_biaya }}</td>
        <td>{{ $data->status }}</td>
    </tr>
@endforeach
</table>